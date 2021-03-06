var div = document.getElementById("dom-tar");
    var mycount = div.textContent;
    var myData = mycount.split(" ");
    
var div = document.getElementById("dom-get");
    var mycity = div.textContent;
    var my = mycity.split(" ");
    
Morris.Bar({
    element: 'graph-bar',
    data: [
        {x: '2011 Q1', y: 3, z: 2, a: 3},
        {x: '2011 Q2', y: 2, z: null, a: 1},
        {x: '2011 Q3', y: 0, z: 2, a: 4},
        {x: '2011 Q4', y: 2, z: 4, a: 3}
    ],
    xkey: 'x',
    ykeys: ['y', 'z', 'a'],
    labels: ['Y', 'Z', 'A'],
    barColors:['#E67A77','#D9DD81','#79D1CF']


});



var day_data = [
    {"elapsed": my[2], "value": myData[2]},
    {"elapsed": my[3], "value": myData[3]},
    {"elapsed": my[4], "value": myData[4]},
    {"elapsed": my[5], "value": myData[5]},
    {"elapsed": my[6], "value": myData[6]},
    {"elapsed": my[7], "value": myData[7]},
   
];
Morris.Line({
    element: 'graph-line',
    data: day_data,
    xkey: 'elapsed',
    ykeys: ['value'],
    labels: ['value'],
    lineColors:['#1FB5AD'],
    parseTime: false
});




// Use Morris.Area instead of Morris.Line
Morris.Area({
    element: 'graph-area-line',
    behaveLikeLine: false,
    data: [
        {x: '2011 Q1', y: 3, z: 3},
        {x: '2011 Q2', y: 2, z: 1},
        {x: '2011 Q3', y: 2, z: 4},
        {x: '2011 Q4', y: 3, z: 3},
        {x: '2011 Q5', y: 3, z: 4}
    ],
    xkey: 'x',
    ykeys: ['y', 'z'],
    labels: ['Y', 'Z'],
    lineColors:['#E67A77','#79D1CF'],



});





// Use Morris.Area instead of Morris.Line
Morris.Donut({
    element: 'graph-donut',
    data: [
        {value: myData[2], label: my[2], formatted: myData[2] + ' Chats' },
        {value: myData[3], label: my[3], formatted: myData[3] + ' Chats' },
        {value: myData[4], label: my[4], formatted: myData[4] + ' Chats' },
        {value: myData[5], label: my[5], formatted: myData[5] + ' Chats' },
        {value: myData[6], label: my[6], formatted: myData[6] + ' Chats' },
        {value: myData[7], label: my[7], formatted: myData[7] + ' Chats' },
         ],
    backgroundColor: '#fff',
    labelColor: '#1fb5ac',
    colors: [
        '#E67A77','#D9DD81','#79D1CF','#95D7BB'
    ],
    formatter: function (x, data) { return data.formatted; }
});



// Use Morris.Area instead of Morris.Line
Morris.Area({
    element: 'graph-area',
    behaveLikeLine: true,
    gridEnabled: false,
    gridLineColor: '#dddddd',
    axes: true,
    fillOpacity:.7,
    data: [
        {period: '2010 Q1', iphone: 10, ipad: 10, itouch: 10},
        {period: '2010 Q2', iphone: 1778, ipad: 7294, itouch: 18441},
        {period: '2010 Q3', iphone: 4912, ipad: 12969, itouch: 3501},
        {period: '2010 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
        {period: '2011 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
        {period: '2011 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
        {period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
        {period: '2011 Q4', iphone: 25073, ipad: 5967, itouch: 5175},
        {period: '2012 Q1', iphone: 10687, ipad: 34460, itouch: 22028},
        {period: '2012 Q2', iphone: 1000, ipad: 5713, itouch: 1791},


    ],
    lineColors:['#E67A77','#D9DD81','#79D1CF'],
    xkey: 'period',
    ykeys: ['iphone', 'ipad', 'itouch'],
    labels: ['iPhone', 'iPad', 'iPod Touch'],
    pointSize: 0,
    lineWidth: 0,
    hideHover: 'auto'

});





