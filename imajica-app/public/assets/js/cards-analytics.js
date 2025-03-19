document.addEventListener("DOMContentLoaded",function(o){let e,s,t,n,l,p;e=config.colors.cardColor,n=config.colors.textMuted,t=config.colors.bodyColor,s=config.colors.headingColor,p=config.colors.borderColor,l=config.fontFamily;var r={donut:{series1:config.colors.success,series2:"#53D28C",series3:"#7EDDA9",series4:"#A9E9C5"},bar:{series1:config.colors.primary,series2:"#8F85F3",series3:"#ABA4F6"}},a=document.querySelector("#weeklyEarningReports"),i={chart:{height:161,parentHeightOffset:0,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{barHeight:"60%",columnWidth:"38%",startingShape:"rounded",endingShape:"rounded",borderRadius:4,distributed:!0}},grid:{show:!1,padding:{top:-30,bottom:0,left:-10,right:-10}},colors:[config.colors_label.primary,config.colors_label.primary,config.colors_label.primary,config.colors_label.primary,config.colors.primary,config.colors_label.primary,config.colors_label.primary],dataLabels:{enabled:!1},series:[{data:[40,65,50,45,90,55,70]}],legend:{show:!1},xaxis:{categories:["Mo","Tu","We","Th","Fr","Sa","Su"],axisBorder:{show:!1},axisTicks:{show:!1},labels:{style:{colors:n,fontSize:"13px",fontFamily:l}}},yaxis:{labels:{show:!1}},tooltip:{enabled:!1},responsive:[{breakpoint:1025,options:{chart:{height:199}}}],states:{hover:{filter:{type:"none"}},active:{filter:{type:"none"}}}},a=(null!==a&&new ApexCharts(a,i).render(),document.querySelector("#supportTracker")),i={series:[85],labels:["Completed Task"],chart:{height:335,type:"radialBar"},plotOptions:{radialBar:{offsetY:10,startAngle:-140,endAngle:130,hollow:{size:"65%"},track:{background:e,strokeWidth:"100%"},dataLabels:{name:{offsetY:-20,color:n,fontSize:"13px",fontWeight:"400",fontFamily:l},value:{offsetY:10,color:s,fontSize:"38px",fontWeight:"400",fontFamily:l}}}},colors:[config.colors.primary],fill:{type:"gradient",gradient:{shade:"dark",shadeIntensity:.5,gradientToColors:[config.colors.primary],inverseColors:!0,opacityFrom:1,opacityTo:.6,stops:[30,70,100]}},stroke:{dashArray:10},grid:{padding:{top:-20,bottom:5}},states:{hover:{filter:{type:"none"}},active:{filter:{type:"none"}}},responsive:[{breakpoint:1025,options:{chart:{height:330}}},{breakpoint:769,options:{chart:{height:280}}}]},a=(null!==a&&new ApexCharts(a,i).render(),document.querySelector("#salesLastMonth")),i={series:[{name:"Sales",data:[32,27,27,30,25,25]},{name:"Visits",data:[25,35,20,20,20,20]}],chart:{height:320,type:"radar",toolbar:{show:!1}},plotOptions:{radar:{polygons:{strokeColors:p,connectorColors:p}}},stroke:{show:!1,width:0},legend:{show:!0,fontSize:"13px",position:"bottom",labels:{colors:t,useSeriesColors:!1},markers:{height:12,width:12,offsetX:-5},itemMargin:{horizontal:10},onItemHover:{highlightDataSeries:!1}},colors:[config.colors.primary,config.colors.info],fill:{opacity:[1,.85]},markers:{size:0},grid:{show:!1,padding:{top:0,bottom:-5}},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun"],labels:{show:!0,style:{colors:[n,n,n,n,n,n],fontSize:"13px",fontFamily:l}}},yaxis:{show:!1,min:0,max:40,tickAmount:4},responsive:[{breakpoint:1025,options:{chart:{height:290}}},{breakpoint:769,options:{chart:{height:390}}}]},a=(null!==a&&new ApexCharts(a,i).render(),document.querySelector("#totalRevenueChart")),i={series:[{name:"Earning",data:[270,210,180,200,250,280,250,270,150]},{name:"Expense",data:[-140,-160,-180,-150,-100,-60,-80,-100,-180]}],chart:{height:390,parentHeightOffset:0,stacked:!0,type:"bar",toolbar:{show:!1}},tooltip:{enabled:!1},plotOptions:{bar:{horizontal:!1,columnWidth:"40%",borderRadius:7,startingShape:"rounded",endingShape:"rounded",borderRadiusApplication:"around",borderRadiusWhenStacked:"last"}},colors:[config.colors.primary,config.colors.warning],dataLabels:{enabled:!1},stroke:{curve:"smooth",width:6,lineCap:"round",colors:[e]},legend:{show:!0,horizontalAlign:"right",position:"top",fontSize:"13px",fontFamily:l,markers:{height:12,width:12,radius:12,offsetX:-5,offsetY:2,strokeWidth:0},labels:{colors:s},itemMargin:{horizontal:10,vertical:2}},grid:{show:!1,padding:{bottom:-8,top:20}},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep"],labels:{style:{fontSize:"13px",colors:n,fontFamily:l}},axisTicks:{show:!1},axisBorder:{show:!1}},yaxis:{labels:{offsetX:-16,style:{fontSize:"13px",colors:n,fontFamily:l}},min:-200,max:300,tickAmount:5},responsive:[{breakpoint:1700,options:{plotOptions:{bar:{columnWidth:"43%"}}}},{breakpoint:1441,options:{plotOptions:{bar:{columnWidth:"50%"}}}},{breakpoint:1300,options:{plotOptions:{bar:{columnWidth:"62%"}}}},{breakpoint:991,options:{plotOptions:{bar:{columnWidth:"38%"}}}},{breakpoint:850,options:{plotOptions:{bar:{columnWidth:"50%"}}}},{breakpoint:449,options:{plotOptions:{bar:{columnWidth:"73%"}},xaxis:{labels:{offsetY:-5}},legend:{show:!0,horizontalAlign:"right",position:"top",itemMargin:{horizontal:10,vertical:0}}}},{breakpoint:394,options:{plotOptions:{bar:{columnWidth:"88%"}},legend:{show:!0,horizontalAlign:"center",position:"bottom",markers:{offsetX:-3,offsetY:0},itemMargin:{horizontal:10,vertical:5}}}}],states:{hover:{filter:{type:"none"}},active:{filter:{type:"none"}}}},a=(null!==a&&new ApexCharts(a,i).render(),document.querySelector("#budgetChart")),i={chart:{height:100,toolbar:{show:!1},zoom:{enabled:!1},type:"line"},series:[{name:"Last Month",data:[20,10,30,16,24,5,40,23,28,5,30]},{name:"This Month",data:[50,40,60,46,54,35,70,53,58,35,60]}],stroke:{curve:"smooth",dashArray:[5,0],width:[1,2]},legend:{show:!1},colors:[p,config.colors.primary],grid:{show:!1,borderColor:p,padding:{top:-30,bottom:-15,left:25}},markers:{size:0},xaxis:{labels:{show:!1},axisTicks:{show:!1},axisBorder:{show:!1}},yaxis:{show:!1},tooltip:{enabled:!1}},a=(null!==a&&new ApexCharts(a,i).render(),document.querySelector("#projectStatusChart")),i={chart:{height:252,type:"area",toolbar:!1},markers:{strokeColor:"transparent"},series:[{data:[2e3,2e3,4e3,4e3,3050,3050,2e3,2e3,3050,3050,4700,4700,2750,2750,5700,5700]}],dataLabels:{enabled:!1},grid:{show:!1,padding:{left:-10,right:-5}},stroke:{width:3,curve:"straight"},colors:[config.colors.primary],fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.4,gradientToColors:[config.colors.cardColor],opacityTo:.1,stops:[0,100]}},xaxis:{labels:{show:!1},axisBorder:{show:!1},axisTicks:{show:!1},lines:{show:!1}},yaxis:{labels:{show:!1},min:1e3,max:6e3,tickAmount:5},tooltip:{enabled:!1}};function d(e,t){var r=config.colors_label.primary,a=config.colors.primary,i=[];for(let o=0;o<e.length;o++)o===t?i.push(a):i.push(r);return{chart:{height:231,parentHeightOffset:0,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{columnWidth:"32%",borderRadiusApplication:"round",borderRadius:6,distributed:!0,dataLabels:{position:"top"}}},grid:{show:!1,padding:{top:0,bottom:0,left:-10,right:-10}},colors:i,dataLabels:{enabled:!0,formatter:function(o){return o+"k"},offsetY:-30,style:{fontSize:"15px",colors:[s],fontWeight:"500",fontFamily:l}},series:[{data:e}],legend:{show:!1},tooltip:{enabled:!1},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep"],axisBorder:{show:!0,color:p},axisTicks:{show:!1},labels:{style:{colors:n,fontSize:"13px",fontFamily:l}}},yaxis:{labels:{offsetX:-15,offsetY:-5,formatter:function(o){return parseInt(+o)+"k"},style:{fontSize:"13px",colors:n,fontFamily:l},min:0,max:6e4,tickAmount:6}},responsive:[{breakpoint:1441,options:{plotOptions:{bar:{columnWidth:"41%"}}}},{breakpoint:590,options:{plotOptions:{bar:{columnWidth:"61%",borderRadius:5}},yaxis:{labels:{show:!1}},grid:{padding:{right:0,left:-20}},dataLabels:{style:{fontSize:"12px",fontWeight:"400"}}}}]}}null!==a&&new ApexCharts(a,i).render();var a=$.ajax({url:assetsPath+"json/earning-reports-charts.json",dataType:"json",async:!1}).responseJSON,i=document.querySelector("#earningReportsTabsOrders"),c=d(a.data[0].chart_data,a.data[0].active_option),i=(null!==i&&new ApexCharts(i,c).render(),document.querySelector("#earningReportsTabsSales")),c=d(a.data[1].chart_data,a.data[1].active_option),i=(null!==i&&new ApexCharts(i,c).render(),document.querySelector("#earningReportsTabsProfit")),c=d(a.data[2].chart_data,a.data[2].active_option),i=(null!==i&&new ApexCharts(i,c).render(),document.querySelector("#earningReportsTabsIncome")),c=d(a.data[3].chart_data,a.data[3].active_option),a=(null!==i&&new ApexCharts(i,c).render(),document.querySelector("#totalEarningChart")),i={chart:{height:175,parentHeightOffset:0,stacked:!0,type:"bar",toolbar:{show:!1}},series:[{name:"Earning",data:[300,200,350,150,250,325,250,270]},{name:"Expense",data:[-180,-225,-180,-280,-125,-200,-125,-150]}],tooltip:{enabled:!1},plotOptions:{bar:{horizontal:!1,columnWidth:"40%",borderRadius:7,startingShape:"rounded",endingShape:"rounded",borderRadiusApplication:"around",borderRadiusWhenStacked:"last"}},colors:[config.colors.primary,config.colors.secondary],dataLabels:{enabled:!1},stroke:{curve:"smooth",width:5,lineCap:"round",colors:[e]},legend:{show:!1},colors:[config.colors.primary,config.colors.secondary],fill:{opacity:1},grid:{show:!1,padding:{top:-40,bottom:-40,left:-10,right:-2}},xaxis:{labels:{show:!1},axisTicks:{show:!1},axisBorder:{show:!1}},yaxis:{labels:{show:!1}},responsive:[{breakpoint:1700,options:{plotOptions:{bar:{columnWidth:"43%"}}}},{breakpoint:1441,options:{plotOptions:{bar:{columnWidth:"50%"}}}},{breakpoint:1300,options:{plotOptions:{bar:{borderRadius:6,columnWidth:"60%"}}}},{breakpoint:1200,options:{plotOptions:{bar:{borderRadius:6,columnWidth:"30%"}}}},{breakpoint:991,options:{plotOptions:{bar:{borderRadius:6,columnWidth:"35%"}}}},{breakpoint:850,options:{plotOptions:{bar:{columnWidth:"50%"}}}},{breakpoint:768,options:{plotOptions:{bar:{columnWidth:"30%"}}}},{breakpoint:476,options:{plotOptions:{bar:{columnWidth:"43%"}}}},{breakpoint:394,options:{plotOptions:{bar:{columnWidth:"58%"}}}}],states:{hover:{filter:{type:"none"}},active:{filter:{type:"none"}}}};null!==a&&new ApexCharts(a,i).render();let h=document.querySelector("#horizontalBarChart"),f={chart:{height:360,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{horizontal:!0,barHeight:"60%",distributed:!0,startingShape:"rounded",borderRadiusApplication:"end",borderRadius:7}},grid:{strokeDashArray:10,borderColor:p,xaxis:{lines:{show:!0}},yaxis:{lines:{show:!1}},padding:{top:-35,bottom:-12}},colors:[config.colors.primary,config.colors.info,config.colors.success,config.colors.secondary,config.colors.danger,config.colors.warning],fill:{opacity:[1,1,1,1,1,1]},dataLabels:{enabled:!0,style:{colors:["#fff"],fontWeight:400,fontSize:"13px",fontFamily:l},formatter:function(o,e){return f.labels[e.dataPointIndex]},offsetX:0,dropShadow:{enabled:!1}},labels:["UI Design","UX Design","Music","Animation","React","SEO"],series:[{data:[35,20,14,12,10,9]}],xaxis:{categories:["6","5","4","3","2","1"],axisBorder:{show:!1},axisTicks:{show:!1},labels:{style:{colors:n,fontFamily:l,fontSize:"13px"},formatter:function(o){return o+"%"}}},yaxis:{max:35,labels:{style:{colors:[n],fontFamily:l,fontSize:"13px"}}},tooltip:{enabled:!0,style:{fontSize:"12px"},onDatasetHover:{highlightDataSeries:!1},custom:function({series:o,seriesIndex:e,dataPointIndex:t}){return'<div class="px-3 py-2"><span>'+o[e][t]+"%</span></div>"}},legend:{show:!1}};null!==h&&new ApexCharts(h,f).render();c=document.querySelector("#carrierPerformance"),a={chart:{height:330,type:"bar",parentHeightOffset:0,stacked:!1,toolbar:{show:!1},zoom:{enabled:!1}},plotOptions:{bar:{horizontal:!1,columnWidth:"50%",startingShape:"rounded",endingShape:"flat",borderRadius:6}},dataLabels:{enabled:!1},series:[{name:"Delivery rate",type:"column",data:[5,4.5,4,3]},{name:"Delivery time",type:"column",data:[4,3.5,3,2.5]},{name:"Delivery exceptions",type:"column",data:[3.5,3,2.5,2]}],xaxis:{tickAmount:10,categories:["Carrier A","Carrier B","Carrier C","Carrier D"],labels:{style:{colors:n,fontSize:"13px",fontFamily:l,fontWeight:400}},axisBorder:{show:!1},axisTicks:{show:!1}},yaxis:{tickAmount:4,min:1,max:5,labels:{style:{colors:n,fontSize:"13px",fontFamily:l,fontWeight:400},formatter:function(o){return o}}},legend:{show:!0,position:"bottom",markers:{size:5,shape:"circle"},height:40,offsetY:0,itemMargin:{horizontal:8,vertical:0},fontSize:"13px",fontFamily:l,fontWeight:400,labels:{colors:s,useSeriesColors:!1},offsetY:-5},grid:{strokeDashArray:6,padding:{bottom:5}},colors:[r.bar.series1,r.bar.series2,r.bar.series3],fill:{opacity:1},responsive:[{breakpoint:1400,options:{chart:{height:275},legend:{fontSize:"13px",offsetY:10}}},{breakpoint:576,options:{chart:{height:300},legend:{itemMargin:{vertical:5,horizontal:10},offsetY:7}}}]},null!==c&&new ApexCharts(c,a).render(),i=document.querySelector("#deliveryExceptionsChart"),c={chart:{height:365,parentHeightOffset:0,type:"donut"},labels:["Incorrect address","Weather conditions","Federal Holidays","Damage during transit"],series:[13,25,22,40],colors:[r.donut.series1,r.donut.series2,r.donut.series3,r.donut.series4],stroke:{width:0},dataLabels:{enabled:!1,formatter:function(o,e){return parseInt(o)+"%"}},legend:{show:!0,position:"bottom",offsetY:10,markers:{size:4,strokeWidth:0},itemMargin:{horizontal:15,vertical:5},fontSize:"13px",fontFamily:l,fontWeight:400,labels:{colors:t,useSeriesColors:!1}},tooltip:{theme:!1},grid:{padding:{top:15}},plotOptions:{pie:{donut:{size:"75%",labels:{show:!0,value:{fontSize:"38px",fontFamily:l,color:s,fontWeight:500,offsetY:-20,formatter:function(o){return parseInt(o)+"%"}},name:{offsetY:30,fontFamily:l},total:{show:!0,fontSize:"15px",fontFamily:l,color:t,label:"AVG. Exceptions",formatter:function(o){return"30%"}}}}}},responsive:[{breakpoint:1025,options:{chart:{height:380}}}]};null!==i&&new ApexCharts(i,c).render()});