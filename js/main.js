/*
URI design:

?{tab-number (0-indexed)}/{tab-1 data (hypen-separated)}/{tab-2 data (hypen-separated)}/{tab-3 data (hypen-separated)}/{company-name}/{industry-id}/


*/

var theIM3WebApp = {
    options: {
        //  A simple storage of the tabs that we have
        tabContainer: 'im3-form',
        tabs: [
            {
                id: 'intro',
                title: 'Innovation Management Maturity Model'
            },
            {
                id: 'people',
                title: 'People',
                inputs: ['cpp', 'fpp']
            },
            {
                id: 'processes',
                title: 'Processes',
                inputs: ['cpr', 'fpr']
            },
            {
                id: 'tools',
                title: 'Tools',
                inputs: ['ct', 'ft']
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
                hideNav: 'backOnly',
            },
            {
                id: 'results',
                title: 'IMMM Results',
                charts: [
                    {
                        id: 'customer-chart-2',
                        dataOne: 'currentData',
                        dataTwo: 'futureData'
                    }, 
                    {
                        id: 'industry-chart',
                        dataOne: 'currentData',
                        dataTwo: 'industryData'
                    }
                ]
            }
        ],
        inputs: {
            current: ['cpp', 'cpr', 'ct'],
            future: ['fpp', 'fpr', 'ft'] 
        },
        chartOptions: {
            seriesColors: ['#9b2c98', '#e86c1f'],
            grid: {
                shadow: false,
                background: '#eff1f3',
                borderWidth: 0,
                gridLineColor: '#e1e1e1'
            },
            series: [
                {
                    label: 'Current',
                    markerOptions: {size: 25, style: 'filledCircle'}
                },
                {
                    label: 'Desired',
                    markerOptions: {size: 25, style: 'filledDiamond'}
                }
            ],
            legend: {
                show: true,
                placement: 'outsideGrid'
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
                    min:0,
                    ticks: [
                        [0, '0'], 
                        [1, '1'], 
                        [2, '2'], 
                        [3, '3'], 
                        [4, '4'],
                        [5, '5'],
                        [6,'']
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
        cpp:    null,
        cpr:    null,
        ct:     null,
        fpp:    null,
        fpr:    null,
        ft:     null,
        foa:    null,
        ipp:    3,
        ipr:    3,
        it:     2,
        ifoa:   4,
        company: null,
        industry: null 
    },
	init: function () {	//	This is where I call everything to get started
		'use strict';
        var navListener;

        navListener = $.proxy(this.navListener, this);

        this.buildTheTabs();
        this.checkTheURL();
        this.addTheSliders();

        $('#tab-nav').on('click', 'a', navListener);


	},
    buildTheTabs: function () {
        $('#' + this.options.tabContainer).find('.tab').hide();
    },
    addTheSliders: function () {
        'use strict';
        var currentSliders = this.options.inputs.current,
            futureSliders = this.options.inputs.future,
            i;

        for (i = currentSliders.length - 1; i >= 0; i -= 1) {
            this.addSlider(currentSliders[i]);
        };
        for (i = futureSliders.length - 1; i >= 0; i -= 1) {
            this.addSlider(futureSliders[i]);
        };
    }, 
	checkTheURL: function () {
		'use strict';
        var pageURL, theURIData, peopleData, processData, toolsData;
		//	On page-load, we need to check the URL to know what state to load the page in
        pageURL = History.getState().url;
        pageURL = pageURL.split('?');
		//	If there's no additional URL string, start from the beginning
        if (!pageURL[1]) {
            //  Go to the beginning
            this.showTab(0);
        } else {
            //  Else if there's a URL string, check that it's valid
            theURIData = pageURL[1].split('/');
            if (theURIData.length > 1) {
                peopleData = theURIData[1].split('-');
                this.dataStore.cpp = peopleData[0];
                this.dataStore.fpp = peopleData[1];
                $('#cpp').val(peopleData[0]);
                $('#fpp').val(peopleData[1]);
                if (theURIData.length > 2) {
                    processData = theURIData[2].split('-');
                    this.dataStore.cpr = processData[0];
                    this.dataStore.fpr = processData[1];
                    $('#cpr').val(processData[0]);
                    $('#fpr').val(processData[1]);
                    if (theURIData.length > 3) {
                        toolsData = theURIData[3].split('-');
                        this.dataStore.ct = toolsData[0];
                        this.dataStore.ft = toolsData[1];
                        $('#ct').val(toolsData[0]);
                        $('#ft').val(toolsData[1]);
                        if (theURIData.length > 4) {
                            this.dataStore.company = theURIData[4];
                            this.dataStore.industry = theURIData[5];
                        }
                    }
                }
            }

            this.showTab(theURIData[0]);
        }

	},
    hideTab: function (tabIndex) {
        'use strict';
        var theTab = $('#' + this.options.tabs[tabIndex].id),
            theTabData = this.options.tabs[tabIndex],
            i;

        theTab.hide().removeClass('current-tab');

        if (theTabData.inputs) {
            for (i = theTabData.inputs.length - 1; i >= 0; i--) {
                console.log(this.dataStore[theTabData.inputs[i]]);
                this.dataStore[theTabData.inputs[i]] =
                    $('#' + theTabData.inputs[i]).val();
            };
        }
    },
    showTab: function (tabIndex) {
        'use strict';
        var theTab = $('#' + this.options.tabs[tabIndex].id),
            theTabData = this.options.tabs[tabIndex],
            i;

        theTab.show().addClass('current-tab')
            .data('tabEnabled', 'true');
        $('a.tab-nav').removeClass('disabled')
        if (theTab.data('tabNumber') === 0) {
            $('a.tab-nav.prev').addClass('disabled');
        }
        if (theTab.data('tabNumber') + 1 === this.options.tabs.length) {
            $('a.tab-nav.next').addClass('disabled');
        }

        if (theTabData.charts) {
            for (i = theTabData.charts.length - 1; i >= 0; i -= 1) {
                this.buildTheGraph(theTabData.charts[i]);
            };
        }

        if (theTabData.hideNav) {
            if (theTabData.hideNav == "backOnly") {
                $('a.tab-nav.next').hide();
            } else {
                $('#tab-nav').hide();
            }
        } else {
            $('#tab-nav').show();
            $('.tab-nav').show();
        }

        //  Update the URL
        this.urlBuilder(tabIndex);
    },
	nextTab: function () {
        'use strict';
        var currentTabIndex;

		//	Adjust the URL to reflect the information from this tab
        History.pushState()

		//	Check the tab's data for what tab to show next
        currentTabIndex = $('.tab').filter('.current-tab').data('tabNumber');

        //  Hide the current tab
        this.hideTab(currentTabIndex);
		//	Show the next Tab
        this.showTab(currentTabIndex + 1);
	},
	prevTab: function () {
		//	Check the tab's data for what the previous tab is
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
            chartOptions;

        //  Gather the data
        dataSets = {
            currentData: 
                [this.dataStore.cpp, this.dataStore.cpr, this.dataStore.ct],
            futureData:
                [this.dataStore.fpp, this.dataStore.fpr, this.dataStore.ft],
            industryData: 
                [this.dataStore.ipp, this.dataStore.ipr, this.dataStore.it]
        };

        //  Set the right data sets
        dataOne = dataSets[graphData.dataOne];
        dataTwo = dataSets[graphData.dataTwo];

		//	Add some graph options
        chartOptions = this.options.chartOptions;

		//	Initialize the graph
        $.jqplot(graphData.id,[dataOne, dataTwo], chartOptions);
	},
    addSlider: function (inputId) {
        'use strict';
        var input = $('#' + inputId);
        var options = this.options.sliderOptions;
        options.value = input.val(),
        options.slide = function(event, ui) { input.val(ui.value); }
        var slider = $('<div id="' + inputId + '-slider"></div>')
            .addClass('my-slider').insertAfter(input).slider(options);
        input.change(function() {
            slider.slider("value", input.val());
        });
    },
    formListener: function (event) {
        'use strict';
        event.preventDefault();
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

        urlString = '?' + tabIndex + '/'
        if (this.dataStore.cpp && this.dataStore.fpp) {
            urlString += this.dataStore.cpp + '-' + this.dataStore.fpp + '/';
            if (this.dataStore.cpr && this.dataStore.fpr) {
                urlString += this.dataStore.cpr + '-'
                    + this.dataStore.fpr + '/';
                if (this.dataStore.ct && this.dataStore.ft) {
                    urlString += this.dataStore.ct + '-'
                        + this.dataStore.ft + '/';
                    if (this.dataStore.company && this.dataStore.industry) {
                        urlString += this.dataStore.company + '/'
                            + this.dataStore.industry + '/';
                    }
                }
            }
        }

        History.pushState(null, this.options.tabs[tabIndex].title, urlString);
    }
};

$(document).ready(theIM3WebApp.init());