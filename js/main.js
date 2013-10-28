/*global _, $, History, sf$, sfjq$, sfcc$, Adapter, ga */
/*jslint nomen: true, browser: true */

var theIM3WebApp;
theIM3WebApp = {
    options: {
        formSubmitted: false,
        //  A simple storage of the tabs that we have
        tabContainer: 'WEBForm',
        tabs: [
            {
                id: 'intro',
                title: 'Innovation Management Maturity Model',
                hideNav: true
            },
            {
                id: 'people',
                title: 'People',
                inputs: ['IMMM_People_Current__c', 'IMMM_People_Desired__c']
            },
            {
                id: 'processes',
                title: 'Processes',
                inputs: ['IMMM_Process_Current__c', 'IMMM_Process_Desired__c']
            },
            {
                id: 'tools',
                title: 'Tools',
                inputs: ['IMMM_Tools_Current__c', 'IMMM_Tools_Desired__c']
            },
            {
                id: 'overall',
                title: 'Overall',
                inputs: ['IMMM_Overall_Current__c', 'IMMM_Overall_Desired__c']
            },
            {
                id: 'contact',
                title: 'See How You Compare to Your Industry',
                charts: [
                    {
                        id: 'customer-chart',
                        dataOne: 'currentData',
                        dataTwo: 'futureData'
                    }
                ],
                hideNav: true
            },
            {
                id: 'results',
                title: 'IMMM Results',
                charts: [
                    {
                        id: 'industry-chart',
                        dataOne: 'currentData',
                        dataTwo: 'industryData'
                    }
                ],
                hideNav: true
            }
        ],
        inputs: {
            current: ['IMMM_People_Current__c', 'IMMM_Process_Current__c', 'IMMM_Tools_Current__c', 'IMMM_Overall_Current__c'],
            future: ['IMMM_People_Desired__c', 'IMMM_Process_Desired__c', 'IMMM_Tools_Desired__c', 'IMMM_Overall_Desired__c']
        },
        chartOptions: {
            grid: {
                shadow: false,
                background: '#a8d4ff',
                borderWidth: 0,
                gridLineColor: '#e1e1e1'
            },
            legend: {
                show: true,
                placement: 'outsideGrid',
                location: 's'
            },
            axes: {
                xaxis: {
                    ticks: [
                        [0.5, ''],
                        [1, 'People'],
                        [2, 'Processes'],
                        [3, 'Tools'],
                        [3.5, '']
                    ],
                    tickOptions: {
                        showGridline: false
                    }
                },
                yaxis: {
                    min: 0,
                    ticks: [
                        [0.5, ''],
                        [1, '1'],
                        [2, '2'],
                        [3, '3'],
                        [4, '4'],
                        [5, '5'],
                        [5.5, '']
                    ],
                    tickOptions: {
                        showMark: false
                    }
                }
            }
        },
        sliderOptions: {
            orientation: "vertical",
            min: 1,
            max: 5,
            step: 1,
            range: "min"
        }
    },
    dataStore: {
        IMMM_People_Current__c: null,
        IMMM_Process_Current__c: null,
        IMMM_Tools_Current__c: null,
        IMMM_People_Desired__c: null,
        IMMM_Process_Desired__c: null,
        IMMM_Tools_Desired__c: null,
        IMMM_Overall_Current__c: null,
        IMMM_Overall_Desired__c: null,
        ipp: 3,
        ipr: 3,
        it: 2,
        icoa: 3,
        ifoa: 4,
        company: null,
        industry: null
    },
    init: function () { //  This is where I call everything to get started
        'use strict';
        var navListener,
            formListener,
            resizeListener,
            backForwardListener;

        navListener = $.proxy(this.navListener, this);
        formListener = $.proxy(this.formListener, this);
        resizeListener = $.proxy(this.resizeListener, this);
        backForwardListener = $.proxy(this.backForwardListener, this);

        _.mixin(_.str.exports());
        _.mixin({
            includeString: _.str.include,
            reverseString: _.str.reverse
        });

        $.webshims.polyfill();

        this.buildTheTabs();
        this.checkTheURL();
        this.addTheSliders();
        this.smartFormsFix();

        $('.tab-nav').on('click', navListener);
        $('#' + this.options.tabContainer).on('submit', formListener);
        $(window).on('resize', resizeListener);
        History.Adapter.bind(window, 'statechange', backForwardListener);
        History.Adapter.bind(window, 'hashchange', backForwardListener);
        $(".info-button").fancybox({
            maxWidth: 800,
            maxHeight: 600,
            fitToView: false,
            width: '70%',
            autoSize: false,
            closeClick: false,
            openEffect: 'none',
            closeEffect: 'none'
        });
        $('#permalink').on('focus',function () {
            this.select();
        }).on('click', function () {
            this.select();
        });
        $('a[rel*="external"]').on('click', function (e) {
            e.preventDefault();
            window.open($(this).attr('href'));
        });
    },
    buildTheTabs: function () {
        'use strict';
        $('#' + this.options.tabContainer).find('.tab').hide();
    },
    addTheSliders: function () {
        'use strict';
        var currentSliders = this.options.inputs.current,
            futureSliders = this.options.inputs.future,
            i;

        for (i = currentSliders.length - 1; i >= 0; i -= 1) {
            this.addSlider(currentSliders[i]);
        }
        for (i = futureSliders.length - 1; i >= 0; i -= 1) {
            this.addSlider(futureSliders[i]);
        }
    },
    checkTheURL: function () {
        'use strict';
        var pageURL, theURIData, peopleData, processData, toolsData, overallData, returnUrlString;
        //  On page-load, we need to check the URL to know what state to load
        pageURL = History.getState().url;
        pageURL = _.words(pageURL, '?');
        //  If there's no additional URL string, start from the beginning
        if (!pageURL[1]) {
            //  Go to the beginning
            this.showTab(0, "replace");
        } else if (pageURL[1].match(/WT\.mc_id/)) {
            if ($('#Tactic__c').length) { //if exists
                this.setTacticCode('WT.mc_id', 'Tactic__c');
            }
            //-- set tactic code raw value in Manticore forms
            if ($('#Tactic_Code__c').length) { //if exists
                this.setTacticCodeRaw('WT.mc_id', 'Tactic_Code__c');
            }
            this.showTab(0, "replace");
        } else {
            //  Else if there's a URL string, check that it's valid
            theURIData = _.words(pageURL[1], '/');
            if (theURIData.length > 1) {
                peopleData = _.words(theURIData[1], '-');
                this.dataStore.IMMM_People_Current__c = peopleData[0];
                this.dataStore.IMMM_People_Desired__c = peopleData[1];
                $('#IMMM_People_Current__c').val(peopleData[0]);
                $('#IMMM_People_Desired__c').val(peopleData[1]);
                if (theURIData.length > 2) {
                    processData = _.words(theURIData[2], '-');
                    this.dataStore.IMMM_Process_Current__c = processData[0];
                    this.dataStore.IMMM_Process_Desired__c = processData[1];
                    $('#IMMM_Process_Current__c').val(processData[0]);
                    $('#IMMM_Process_Desired__c').val(processData[1]);
                    if (theURIData.length > 3) {
                        toolsData = _.words(theURIData[3], '-');
                        this.dataStore.IMMM_Tools_Current__c = toolsData[0];
                        this.dataStore.IMMM_Tools_Desired__c = toolsData[1];
                        $('#IMMM_Tools_Current__c').val(toolsData[0]);
                        $('#IMMM_Tools_Desired__c').val(toolsData[1]);
                        if (theURIData.length > 4) {
                            overallData = _.words(theURIData[4], '-');
                            this.dataStore.IMMM_Overall_Current__c = overallData[0];
                            this.dataStore.IMMM_Overall_Desired__c = overallData[1];
                            $('#IMMM_Overall_Current__c').val(overallData[0]);
                            $('#IMMM_Overall_Desired__c').val(overallData[1]);
                            if (theURIData.length > 5) {
                                this.dataStore.company = decodeURIComponent(theURIData[5]);
                            }
                        }
                    }
                }
            }

            this.showTab(theURIData[0], "replace");
            if (theURIData[0] === "6") {
                returnUrlString = History.getState().url;
                $('#permalink').val(returnUrlString);
                this.barChartRender('desired-survey', 'industry-desired');
                $('.company-name').text(this.dataStore.company);
            }
        }

    },
    hideTab: function (tabIndex) {
        'use strict';
        var theTab = $('#' + this.options.tabs[tabIndex].id),
            theTabData = this.options.tabs[tabIndex],
            i;

        theTab.hide().removeClass('current-tab');

        if (theTabData.inputs) {
            for (i = theTabData.inputs.length - 1; i >= 0; i -= 1) {
                this.dataStore[theTabData.inputs[i]] =
                    $('#' + theTabData.inputs[i]).val();
            }
        }
    },
    showTab: function (tabIndex, noStateChange) {
        'use strict';
        var theTab = $('#' + this.options.tabs[tabIndex].id),
            theTabData = this.options.tabs[tabIndex],
            i;

        theTab.show().addClass('current-tab')
            .data('tabEnabled', 'true');

        $('.tab-nav').removeClass('disabled');

        //  Hide the nav if i want to
        if (theTabData.hideNav) {
            if (theTabData.hideNav === "backOnly") {
                $('a.tab-nav.next').addClass('disabled');
            } else {
                $('#tab-nav').hide();
            }
        } else {
            $('#tab-nav').show();
        }

        //  Disable prev and next buttons for first and last tabs
        if (theTab.data('tabNumber') === 0) {
            $('a.tab-nav.prev').addClass('disabled');
        }
        if (theTab.data('tabNumber') + 1 === this.options.tabs.length) {
            $('a.tab-nav.next').addClass('disabled');
        }

        //  Render charts as I see fit
        if (theTabData.charts) {
            for (i = theTabData.charts.length - 1; i >= 0; i -= 1) {
                this.buildTheGraph(theTabData.charts[i]);
            }
        }
        if (tabIndex == 6) {
            this.barChartRender('desired-survey', 'industry-desired');
            $('.company-name').text(this.dataStore.company);
        }

        $(document).scrollTop(0);

        //  Update the URL
        if (!noStateChange) {
            History.pushState(null, this.options.tabs[tabIndex].title, this.urlBuilder(tabIndex));
            ga('send','pageview');
        }
        if (noStateChange === "replace") {
            History.replaceState(null, this.options.tabs[tabIndex].title, this.urlBuilder(tabIndex));
        }
    },
    nextTab: function () {
        'use strict';
        var currentTabIndex;

        //  Check the tab's data for what tab to show next
        currentTabIndex = $('.tab').filter('.current-tab').data('tabNumber');

        //  Hide the current tab
        this.hideTab(currentTabIndex);
        //  Show the next Tab
        this.showTab(currentTabIndex + 1);
    },
    prevTab: function () {
        'use strict';
        //  Check the tab's data for what the previous tab is
        var currentTabIndex;

        currentTabIndex = $('.tab').filter('.current-tab').data('tabNumber');

        //  Hide the current tab
        this.hideTab(currentTabIndex);
        //  Show the next Tab
        this.showTab(currentTabIndex - 1);
    },
    buildTheGraph: function (graphData) {
        'use strict';
        var dataSets,
            dataOne,
            dataTwo,
            chartOptions,
            context,
            company;

        //  Add some graph options
        chartOptions = this.options.chartOptions;

        context = this;

        if (this.dataStore.company) {
            company = this.dataStore.company + ' - ';
        } else {
            company = '';
        }

        //  Gather the data
        dataSets = {
            currentData: {
                data: [context.dataStore.IMMM_People_Current__c, context.dataStore.IMMM_Process_Current__c,
                    context.dataStore.IMMM_Tools_Current__c],
                options: {
                    label: company + 'Current',
                    markerOptions: {size: 25, style: 'filledCircle'}
                },
                color: '#5183af'
            },
            futureData: {
                data: [context.dataStore.IMMM_People_Desired__c, context.dataStore.IMMM_Process_Desired__c,
                    context.dataStore.IMMM_Tools_Desired__c],
                options: {
                    label: company + 'Desired',
                    markerOptions: {size: 25, style: 'filledDiamond'}
                },
                color: '#55a51c'
            },
            industryData: {
                data: [context.dataStore.ipp, context.dataStore.ipr,
                    context.dataStore.it],
                options: {
                    label: 'Surveyed* - Current',
                    markerOptions: {size: 20, style: 'filledSquare'}
                },
                color: '#9b2c98'
            }
        };


        chartOptions.series = [
            dataSets[graphData.dataOne].options,
            dataSets[graphData.dataTwo].options
        ];

        chartOptions.seriesColors = [
            dataSets[graphData.dataOne].color,
            dataSets[graphData.dataTwo].color
        ];

        //  Set the right data sets
        dataOne = dataSets[graphData.dataOne].data;
        dataTwo = dataSets[graphData.dataTwo].data;


        //  Initialize the graph
        $.jqplot(graphData.id, [dataOne, dataTwo], chartOptions);
    },
    addSlider: function (inputId) {
        'use strict';
        var input = $('#' + inputId),
            options = this.options.sliderOptions,
            slider;

        options.value = input.val();
        options.slide = function (event, ui) {
            input.val(ui.value);
        };

        slider = $('<div id="' + inputId + '-slider"></div>')
            .insertAfter(input).addClass('my-slider').slider(options);
        input.change(function () {
            slider.slider("value", input.val());
        });
    },
    formListener: function (event) {
        'use strict';
        var returnUrlString, companyValue;
        event.preventDefault();

        companyValue = $('#Company').val();

        returnUrlString = History.getState().url;
        returnUrlString = returnUrlString.split('?');
        returnUrlString[1] = returnUrlString[1].split('/');
        returnUrlString[1][0] = "6";
        returnUrlString[1] = returnUrlString[1].join('/');
        returnUrlString = returnUrlString.join('?');
        if (companyValue || this.dataStore.company !== "Your Organization") {
            returnUrlString += encodeURIComponent(companyValue) + '/';
            this.dataStore.company = companyValue;
        }
        $('#Redirect').val(returnUrlString);
        $('#permalink').val(returnUrlString);

        // SmartForms Specific Code
        // Check to see if SmartFroms is enabled
        if (typeof sf$ === "object" && (typeof sf$.forceSelection === "function" && sfcc$.doAppend)) {
            sfcc$.doAppend = false;
            sf$.forceSelection();
            return false;
        }

        this.ajaxCall();
        return true;
        // End SmartForms code

    },
    navListener: function (event) {
        'use strict';
        event.preventDefault();
        if ($(event.currentTarget).hasClass('next')) {
            this.nextTab();
        } else if ($(event.currentTarget).hasClass('prev')) {
            this.prevTab();
        }
    },
    urlBuilder: function (tabIndex) {
        'use strict';
        var urlString;

        urlString = '?' + tabIndex + '/';
        if (this.dataStore.IMMM_People_Current__c && this.dataStore.IMMM_People_Desired__c) {
            urlString += this.dataStore.IMMM_People_Current__c + '-' + this.dataStore.IMMM_People_Desired__c + '/';
            if (this.dataStore.IMMM_Process_Current__c && this.dataStore.IMMM_Process_Desired__c) {
                urlString += this.dataStore.IMMM_Process_Current__c + '-'
                    + this.dataStore.IMMM_Process_Desired__c + '/';
                if (this.dataStore.IMMM_Tools_Current__c && this.dataStore.IMMM_Tools_Desired__c) {
                    urlString += this.dataStore.IMMM_Tools_Current__c + '-'
                        + this.dataStore.IMMM_Tools_Desired__c + '/';
                    if (this.dataStore.IMMM_Overall_Desired__c && this.dataStore.IMMM_Overall_Current__c) {
                        urlString += this.dataStore.IMMM_Overall_Current__c + '-'
                            + this.dataStore.IMMM_Overall_Desired__c + '/';
                        if (this.dataStore.company) {
                            urlString += encodeURIComponent(this.dataStore.company) + '/';
                        }
                    }
                }
            }
        }

        return urlString;
    },
    barChartRender: function (element, element2) {
        'use strict';
        var companyName = this.dataStore.company;
        // $.jqplot(element,
        //     [[
        //         [7, 'No desire to improve', '7%'],
        //         [8, 'Level 2', '8%'],
        //         [15, 'Level 3', '15%'],
        //         [32, 'Level 4', '32%'],
        //         [26, 'Level 5', '26%'],
        //         [12, 'Don\'t Know', '12%']
        //     ]],
        //     {
        //         seriesColors: ['#9b2c98'],
        //         seriesDefaults: {
        //             renderer: $.jqplot.BarRenderer,
        //             // Rotate the bar shadow as if bar is lit from top right.
        //             shadow: false,
        //             // Here's where we tell the chart it is oriented horizontally.
        //             rendererOptions: {
        //                 highlightMouseOver: false,
        //                 barDirection: 'horizontal'
        //             },
        //             pointLabels: { show: true, location: 'e', edgeTolerance: -15 }
        //         },
        //         grid: {
        //             shadow: false,
        //             background: '#a8d4ff',
        //             borderWidth: 0,
        //             gridLineColor: '#e1e1e1'
        //         },
        //         axes: {
        //             xaxis: {
        //                 tickOptions: {
        //                     showMark: false,
        //                     showLabel: false,
        //                     showGridline: true
        //                 }
        //             },
        //             yaxis: {
        //                 renderer: $.jqplot.CategoryAxisRenderer,
        //                 tickOptions: {
        //                     showGridline: false,
        //                     showMark: false
        //                 }
        //             }
        //         }
        //     });

        $.jqplot(element2,
            [
                [this.dataStore.IMMM_Overall_Current__c, this.dataStore.IMMM_Overall_Desired__c],
                [this.dataStore.icoa, this.dataStore.ifoa]
            ],
            {
                // The "seriesDefaults" option is an options object that will
                // be applied to all series in the chart.
                seriesColors: ['#5183af', '#9b2c98'],
                seriesDefaults: {
                    renderer: $.jqplot.BarRenderer,
                    shadow: false,
                    rendererOptions: {
                        highlightMouseOver: false
                    }
                },
                // Custom labels for the series are specified with the "label"
                // option on the series option.  Here a series option object
                // is specified for each series.
                series: [
                    {label: (companyName || 'Your Company')},
                    {label: 'Surveyed*'}
                ],
                // Show the legend and put it outside the grid, but inside the
                // plot container, shrinking the grid to accomodate the legend.
                // A value of "outside" would not shrink the grid and allow
                // the legend to overflow the container.
                legend: {
                    show: true,
                    placement: 'outsideGrid',
                    location: 's'
                },
                grid: {
                    shadow: false,
                    background: '#a8d4ff',
                    borderWidth: 0,
                    gridLineColor: '#e1e1e1'
                },
                axes: {
                    // Use a category axis on the x axis and use our custom ticks.
                    xaxis: {
                        renderer: $.jqplot.CategoryAxisRenderer,
                        ticks: ['Current Overall Score', 'End-Goal Overall Score']
                    },
                    // Pad the y axis just a little so bars can get close to, but
                    // not touch, the grid boundaries.  1.2 is the default padding.
                    yaxis: {
                        tickOptions: {showMark: false},
                        pad: 1.5,
                        ticks: [
                            [0, '0'],
                            [1, '1'],
                            [2, '2'],
                            [3, '3'],
                            [4, '4'],
                            [5, '5'],
                            [5.5, '']
                        ]
                    }
                }
            });
    },
    resizeListener: function () {
        'use strict';
        var currentTabIndex = $('.tab').filter('.current-tab').data('tabNumber'),
            currentTabData = this.options.tabs[currentTabIndex],
            i;

        if (currentTabData.charts) {
            for (i = currentTabData.charts.length - 1; i >= 0; i -= 1) {
                $("#" + currentTabData.charts[i].id).empty();
                this.buildTheGraph(currentTabData.charts[i]);
            }
        }
        if (currentTabIndex === 6) {
            $('#desired-survey').empty();
            $('#industry-desired').empty();
            this.barChartRender('desired-survey', 'industry-desired');
        }
    },
    backForwardListener: function () {
        'use strict';
        var pageURL, currentTabIndex, theURIData;


        currentTabIndex = $('.tab').filter('.current-tab').data('tabNumber');
        pageURL = History.getState().url;
        pageURL = _.words(pageURL, '?');

        if (!pageURL[1]) {
            //  Go to the beginning
            this.buildTheTabs();
            this.showTab(0, true);
        } else {
            theURIData = _.words(pageURL[1], '/');
            if (currentTabIndex != theURIData[0]) {
                this.hideTab(currentTabIndex);
                this.showTab(theURIData[0], true);
                History.replaceState(null, this.options.tabs[theURIData[0]].title, this.urlBuilder(theURIData[0]));
            }
        }
    },
    smartFormsFix: function () {
        'use strict';
        var context = this;

        //noinspection JSUndeclaredVariable
        sfcc$ = {};
        sfcc$.doAppend = true;

        sf$.doSmartFormSubmit = function () {
            sfjq$("#RFLoadingFrame").remove();
            sfjq$("#RFBlockFrame").remove();
            document.body.style.cursor = "auto";
            context.ajaxCall();
        };
    },
    ajaxCall: function () {
        'use strict';
        var form, context, message, companyValue;

        context = this;

        message = $('<div />').addClass('alert').addClass('col-md-4');

        form = $('#' + this.options.tabContainer);
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: form.serialize(),
            beforeSend: function () {
                companyValue = $('#Company').val();
                context.dataStore.company = companyValue;
                $('.company-name').text(companyValue);
                $('#contact-inputs').hide().wrap('<div id="error-container"></div>');
                message.addClass('alert-info').html('<strong>Thank You!</strong>'
                    + '<br/>Please wait while we process your form submission.');
                $('#error-container').prepend(message);
            },
            success: function () {
                $('#contact-inputs').detach();
                message.removeClass('alert-info').addClass('alert-success');
                message.html('<strong>Success!</strong>'
                    + '<br/>Your information has been processed. '
                    + 'Your results are available on the next page!');
                $('.tab-nav').show();
                context.options.tabs[4].hideNav = false;
                context.nextTab();
            },
            error: function () {
                $('#contact-inputs').show();
                message.removeClass('alert-info').addClass('alert-danger alert-dismissable');
                message.html('<strong>Uh oh!</strong>'
                    + '<br/>We encountered an error submitting your request.');
                message.prepend('<button type="button" class="close" data-dismiss="alert"'
                    + ' aria-hidden="true">&times;</button>');
            }
        });
    },
    setTacticCode: function (queryVariableName, tacticCodeElementID) {
        'use strict';
        var queryVariableValue, numberOfTacticCodeDigits, queryVariableValueNumber, e;

        queryVariableValue = this.getQueryVariableValue(queryVariableName);
        if (queryVariableValue) {
            numberOfTacticCodeDigits = 3;
            if (queryVariableValue.length === 10) { //00-99
                numberOfTacticCodeDigits = 2;
            }
            queryVariableValueNumber = queryVariableValue
                .substr((queryVariableValue.length - numberOfTacticCodeDigits), numberOfTacticCodeDigits);
            if (!isNaN(queryVariableValueNumber)) { //if the last digits are numbers, use the tacticCodes array value
                queryVariableValue = tacticCodes[Number(queryVariableValueNumber)];
            }
            e = document.getElementById(tacticCodeElementID);
            e.value = queryVariableValue;
        }
    },
    setTacticCodeRaw: function (queryVariableName, tacticCodeElementID) {
        'use strict';
        var queryVariableValue, e;

        queryVariableValue = this.getQueryVariableValue(queryVariableName);
        if (queryVariableValue) {
            e = document.getElementById(tacticCodeElementID);
            e.value = queryVariableValue;
        }
    },
    getQueryVariableValue: function (variableName) {
        'use strict';
        var query, queryResults, pair, i, ii;

        query = window.location.search.substring(1);
        queryResults = query.split("&");
        for (i = 0, ii = queryResults.length; i < ii; i += 1) {
            pair = queryResults[i].split("=");
            if (pair[0] === variableName) {
                return pair[1];
            }
        }
        return false;
    }
};

$(document).ready(theIM3WebApp.init());

/*
TODO Add PDF rendering
TODO Add comments and JSDoc notes
*/