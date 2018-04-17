



<div id="column-chart" style="min-width: 310px; height: 600px; margin: 0 auto" ></div>
        <script src="js/jquery.min.js"></script>
        <script src="js/highcharts.js"></script> 
        <script type="text/javascript" src="/js/themes/dark-unica.js"></script> <!-- letak bawah because need to load highchart 1st then themes -->

<script>

        $(function () {


                    $('#column-chart').highcharts({
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Company Income. Mid 2017 to Oct 2017'
                        },
                        subtitle: {
                            text: 'Click the columns to view versions. Source: <a href="http://netmarketshare.com">netmarketshare.com</a>.'
                        },
                        xAxis: {
                             categories: <?php echo json_encode($name) ?>,
                        },
                        yAxis: {
                           min: 0,
                                title: {
                                    text: 'Amount ( Dollar)'
                                }
                            },
                        legend: {
                            enabled: false
                        },
                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    enabled: true,
                                    format: '{point.y:.1f}%'
                                }
                            }
                        },

                        tooltip: {
                            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                        },

                        series: [{
                            name: 'Brands',
                            colorByPoint: true,
                            data: [{
</script>    

</body>
</html>
