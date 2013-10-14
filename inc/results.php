<?php 
/**
 * This is the results display
 *
 * @since 0.0.0
 * @version 0.0.0
 * @package IM3
*/

$industriesCurrentResults = array(
  "1" => array(1,1,1),
  "2" => array(2,2,2),
  "3" => array(3,3,3),
  "4" => array(4,4,4),
  "5" => array(5,5,5),
  "6" => array(1,2,3),
  "7" => array(2,3,4),
  "8" => array(3,4,5),
  "9" => array(3,2,1)
);
$industriesFutureResults = array(
  "1" => array(1,1,1),
  "2" => array(2,2,2),
  "3" => array(3,3,3),
  "4" => array(4,4,4),
  "5" => array(5,5,5),
  "6" => array(1,2,3),
  "7" => array(2,3,4),
  "8" => array(3,4,5),
  "9" => array(3,2,1)
);


$usCurrentPeople = $_GET['current-people'];
$usCurrentProcesses = $_GET['current-processes'];
$usCurrentTools = $_GET['current-tools'];

$ssCurrentPeople = htmlspecialchars($usCurrentPeople);
$ssCurrentProcesses = htmlspecialchars($usCurrentProcesses);
$ssCurrentTools = htmlspecialchars($usCurrentTools);

$industryCurrent = $industriesCurrentResults[($_GET['industry'])];
$industryCurrentPeople = $industryCurrent[0];
$industryCurrentProcesses = $industryCurrent[1];
$industryCurrentTools = $industryCurrent[2];

$usFuturePeople = $_GET['future-people'];
$usFutureProcesses = $_GET['future-processes'];
$usFutureTools = $_GET['future-tools'];

$ssFuturePeople = htmlspecialchars($usFuturePeople);
$ssFutureProcesses = htmlspecialchars($usFutureProcesses);
$ssFutureTools = htmlspecialchars($usFutureTools);

$industryFuture = $industriesFutureResults[($_GET['industry'])];
$industryFuturePeople = $industryFuture[0];
$industryFutureProcesses = $industryFuture[1];
$industryFutureTools = $industryFuture[2];

$usCompany = $_GET['company'];
$ssCompany = htmlspecialchars($usCompany);

//  Define a variable with access to the constants so we can interpolate it in the HEREDOC string definition
$constants = get_defined_constants();

$customHeaderStyles = <<<CUSTOM_HEADER_STYLES
<link rel="stylesheet" type="text/css" href="{$constants['IM3_ROOT_URI']}js/vendor/jqplot/jquery.jqplot.css" />
CUSTOM_HEADER_STYLES;

$customFooterScripts = <<<CUSTOM_FOOTER_SCRIPTS
<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="{$constants['IM3_ROOT_URI']}js/vendor/jqplot/excanvas.js"></script><![endif]-->
<script language="javascript" type="text/javascript" src="{$constants['IM3_ROOT_URI']}js/vendor/jqplot/jquery.jqplot.min.js"></script>
<script>
$(document).ready(function(){
  var companyCurrent = [{$ssCurrentPeople}, {$ssCurrentProcesses}, {$ssCurrentTools}];
  var industryCurrent = [{$industryCurrentPeople}, {$industryCurrentProcesses}, {$industryCurrentTools}];
  var companyFuture = [{$ssFuturePeople}, {$ssFutureProcesses}, {$ssFutureTools}];
  var industryFuture = [{$industryFuturePeople}, {$industryFutureProcesses}, {$industryFutureTools}];

  var myChartOptions = {
    seriesColors: ['#9b2c98', '#e86c1f'],
    grid: {
      shadow: false,
      background: '#eff1f3',
      borderWidth: 0,
      gridLineColor: '#e1e1e1'
    },
    series: [
      {
        label: '{$ssCompany}',
        markerOptions: {size: 25, style: 'filledCircle'}
      },
      {
        label: 'Industry',
        markerOptions: {size: 25, style: 'filledDiamond'}
      }
    ],
    legend: {
      show: true,
      placement: 'outsideGrid'
    },
    axes: {
      xaxis: {
        ticks: [[0.5, ''],[1, 'People'], [2, 'Processes'], [3, 'Tools'], [3.5, '']],
        tickOptions: {showGridline: false}
      },
      yaxis: {
        min:0,
        ticks: [[0, '0'], [1, '1'], [2, '2'], [3, '3'], [4, '4'],[5, '5'],[6,'']],
        tickOptions: {
          showMark: false
        }
      }
    }
  };

  var plotCurrent = $.jqplot('where-now-chart',[companyCurrent, industryCurrent], myChartOptions);
  var plotCurrent = $.jqplot('where-future-chart',[companyFuture, industryFuture], myChartOptions);
});
</script>
CUSTOM_FOOTER_SCRIPTS;

include(IM3_ROOT_DIR . 'inc/views/header.php');

?>
<h1>Results for <?php echo $ssCompany; ?></h1>

<h2>Where You Are Now</h2>
<div id="where-now-chart"></div>
<h2>Where You Want to Be</h2>
<div id="where-future-chart"></div>

<h2>What Does it Mean?</h2>
<p>This is static text right now, but we can change that.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis interdum tempus. Suspendisse potenti. Praesent id purus adipiscing, euismod sem eget, consequat lorem. Curabitur in mauris elementum turpis tincidunt condimentum. Nam tristique enim in neque lacinia vehicula. Vivamus rutrum sapien a purus ultricies hendrerit. Aenean sit amet pellentesque lectus, eget convallis tellus. Nam semper turpis urna, et vestibulum mauris rhoncus sit amet. Nunc risus justo, blandit sed nulla sit amet, interdum hendrerit mi. In hac habitasse platea dictumst. Sed luctus sed urna et lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
<p>Nunc iaculis aliquet dictum. Maecenas quis mauris et lectus faucibus ornare a eu nisi. Vestibulum congue faucibus turpis, eget congue mi tempor eget. Aliquam sed mattis nisi. Sed vel justo non nisi ornare dapibus eget sit amet elit. Duis vel sagittis enim. Proin id metus risus. Vivamus enim nulla, pretium id felis ac, sagittis condimentum lacus. Integer convallis risus nibh, non vulputate enim tempor id. Integer posuere at eros vel ullamcorper. Praesent lorem felis, iaculis quis iaculis in, bibendum sit amet arcu. Curabitur adipiscing ultricies mi, ac dignissim urna pellentesque tempor.</p>
<?php include(IM3_ROOT_DIR . 'inc/views/footer.php');