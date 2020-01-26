$(function() {
    'use strict';
    (function() {
        var aside=$('.side-nav'), showAsideBtn=$('.show-side-btn'), contents=$('#contents');
        showAsideBtn.on("click", function() {
            $("#"+$(this).data('show')).toggleClass('show-side-nav');
            contents.toggleClass('margin')
        }
        );
        if($(window).width()<=767) {
            aside.addClass('show-side-nav')
        }
        $(window).on('resize', function() {
            if($(window).width()>767) {
                aside.removeClass('show-side-nav')
            }
        }
        );
        var slideNavDropdown=$('.side-nav-dropdown');
        $('.side-nav .categories li').on('click', function() {
            $(this).toggleClass('opend').siblings().removeClass('opend');
            if($(this).hasClass('opend')) {
                $(this).find('.side-nav-dropdown').slideToggle('fast');
                $(this).siblings().find('.side-nav-dropdown').slideUp('fast')
            }
            else {
                $(this).find('.side-nav-dropdown').slideUp('fast')
            }
        }
        );
        $('.side-nav .close-aside').on('click', function() {
            $('#'+$(this).data('close')).addClass('show-side-nav');
            contents.removeClass('margin')
        }
        )
    }
    ());
    var chart=document.getElementById('myChart');
    Chart.defaults.global.animation.duration=2000;
    Chart.defaults.global.title.display=!1;
    Chart.defaults.global.title.text="Chart";
    Chart.defaults.global.title.position='bottom';
    Chart.defaults.global.defaultFontColor='#999';
    Chart.defaults.global.defaultFontSize=10;
    Chart.defaults.global.tooltips.borderColor='white';
    Chart.defaults.global.legend.labels.padding=0;
    Chart.defaults.scale.ticks.beginAtZero=!0;
    Chart.defaults.scale.gridLines.zeroLineColor='rgba(255, 255, 255, 0.1)';
    Chart.defaults.scale.gridLines.color='rgba(255, 255, 255, 0.02)';
    Chart.defaults.global.legend.display=!1;
    var myChart=new Chart(chart, {
        type:'bar', data: {
            labels:["January", "February", "March", "April", "May", 'Jul'], datasets:[ {
                label: "Lost", fill: !1, lineTension: 0, data: [45, 25, 40, 20, 45, 20], pointBorderColor: "#4bc0c0", borderColor: '#4bc0c0', borderWidth: 2, showLine: !0,
            }
            , {
                label: "Succes", fill: !1, lineTension: 0, startAngle: 2, data: [20, 40, 20, 45, 25, 60], backgroundColor: "transparent", pointBorderColor: "#ff6384", borderColor: '#ff6384', borderWidth: 2, showLine: !0,
            }
            ]
        }
        ,
    }
    );
    var Chart2=document.getElementById('myChart2').getContext('2d');
    var chart=new Chart(Chart2, {
        type:'line', data: {
            labels:["January", "February", "March", "April", 'test', 'test', 'test', 'test'], datasets:[ {
                label: "My First dataset", backgroundColor: 'rgb(255, 99, 132)', borderColor: 'rgb(255, 79, 116)', borderWidth: 2, pointBorderColor: !1, data: [5, 10, 5, 8, 20, 30, 20, 10], fill: !1, lineTension: .4,
            }
            , {
                label: "Month", fill: !1, lineTension: .4, startAngle: 2, data: [20, 14, 20, 25, 10, 15, 25, 10], backgroundColor: "transparent", pointBorderColor: "#4bc0c0", borderColor: '#4bc0c0', borderWidth: 2, showLine: !0,
            }
            , {
                label: "Month", fill: !1, lineTension: .4, startAngle: 2, data: [40, 20, 5, 10, 30, 15, 15, 10], backgroundColor: "transparent", pointBorderColor: "#ffcd56", borderColor: '#ffcd56', borderWidth: 2, showLine: !0,
            }
            ]
        }
        , options: {
            title: {
                display: !1
            }
        }
    }
    );
    console.log(Chart.defaults.global);
    var chart=document.getElementById('chart3');
    var myChart=new Chart(chart, {
        type:'line', data: {
            labels:["One", "Two", "Three", "Four", "Five", 'Six', "Seven", "Eight"], datasets:[ {
                label: "Lost", fill: !1, lineTension: .5, pointBorderColor: "transparent", pointColor: "white", borderColor: '#d9534f', borderWidth: 0, showLine: !0, data: [0, 40, 10, 30, 10, 20, 15, 20], pointBackgroundColor: 'transparent',
            }
            , {
                label: "Lost", fill: !1, lineTension: .5, pointColor: "white", borderColor: '#5cb85c', borderWidth: 0, showLine: !0, data: [40, 0, 20, 10, 25, 15, 30, 0], pointBackgroundColor: 'transparent',
            }
            , {
                label: "Lost", fill: !1, lineTension: .5, pointColor: "white", borderColor: '#f0ad4e', borderWidth: 0, showLine: !0, data: [10, 40, 20, 5, 35, 15, 35, 0], pointBackgroundColor: 'transparent',
            }
            , {
                label: "Lost", fill: !1, lineTension: .5, pointColor: "white", borderColor: '#337ab7', borderWidth: 0, showLine: !0, data: [0, 30, 10, 25, 10, 40, 20, 0], pointBackgroundColor: 'transparent',
            }
            ]
        }
        ,
    }
    )
}

)