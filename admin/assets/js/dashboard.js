$(function () {
    // charts
    // chart revenue

    $.ajax({
      url: base_url + "application/ajax.php?request=getOverallImpressions",
      async: false
    }).done(function(data) {
        var data = $.parseJSON(data);
        data_items = data;
    });

    $.ajax({
      url: base_url + "application/ajax.php?request=getOverallClicks",
      async: false
    }).done(function(data) {
        var data = $.parseJSON(data);
        data_items2 = data;
    });

    
    itemsChart = Morris.Bar({
        element: 'items-chart',
        data: data_items,
        barColors: ['#3498db'],
        gridTextColor: '#34495e',
        xkey: 'company',
        ykeys: ['impression_count'],
        labels: ['Impression Count'],
        barRatio: 0.4,
        xLabelAngle: 0,
        hideHover: 'auto',
    });

    itemsChart2 = Morris.Bar({
        element: 'items-chart2',
        data: data_items2,
        barColors: ['#3498db'],
        gridTextColor: '#34495e',
        xkey: 'company',
        ykeys: ['click_count'],
        labels: ['Click Count'],
        barRatio: 0.4,
        xLabelAngle: 0,
        hideHover: 'auto',
    });



    // update data on content or window resize
    var update = function(){
        itemsChart.redraw();
        itemsChart2.redraw();
    }

    // handle chart responsive on toggle .content
    $(window).on('resize', function(){
        update();
    })

    $('#toggle-content').on('click', function(){
        update();
    })
    // end chart
    
    
})