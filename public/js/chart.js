// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chartcommission = am4core.create("chartcommission", am4charts.PieChart);

// Add and configure Series
var pieSeries = chartcommission.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "Total";
pieSeries.dataFields.category = "Status";

// Let's cut a hole in our Pie chart the size of 30% the radius
chartcommission.innerRadius = am4core.percent(30);

// Put a thick white border around each Slice
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;
pieSeries.slices.template
    // change the cursor on hover to make it apparent the object can be interacted with
    .cursorOverStyle = [
    {
        "property": "cursor",
        "value": "pointer"
    }
];
var colorSet = new am4core.ColorSet();
colorSet.list = ["#ff0900", "#32b9b3"].map(function (color) {
    return new am4core.color(color);
});
pieSeries.colors = colorSet;
pieSeries.alignLabels = false;
pieSeries.labels.template.bent = true;
pieSeries.labels.template.radius = 3;
pieSeries.labels.template.padding(0, 0, 0, 0);

pieSeries.ticks.template.disabled = true;

// Create a base filter effect (as if it's not there) for the hover to return to
var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
shadow.opacity = 0;

// Create hover state
var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

// Slightly shift the shadow and make it more prominent on hover
var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
hoverShadow.opacity = 0.7;
hoverShadow.blur = 5;

// Add a legend
chartcommission.legend = new am4charts.Legend();

chartcommission.dataSource.url = `${base_url}chart/dp`;

//-----------------------------------------------------------------

var chartgroupunit = am4core.create("chartgroupunit", am4charts.XYChart);

chartgroupunit.dataSource.url = `${base_url}chart/groupunit`;

chartgroupunit.padding(40, 40, 40, 40);

var categoryAxis = chartgroupunit.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "Unit";
categoryAxis.renderer.minGridDistance = 60;

var valueAxis = chartgroupunit.yAxes.push(new am4charts.ValueAxis());

var series = chartgroupunit.series.push(new am4charts.ColumnSeries());
series.dataFields.categoryX = "Unit";
series.dataFields.valueY = "visits";
series.tooltipText = "{valueY.value}"
series.columns.template.strokeOpacity = 0;

chartgroupunit.cursor = new am4charts.XYCursor();

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function (fill, target) {
    return chartgroupunit.colors.getIndex(target.dataItem.index);
});
//---------------------------------------------------------

var chartkinerjasales = am4core.create("chartkinerjasales", am4charts.XYChart);

chartkinerjasales.dataSource.url = `${base_url}chart/kinerjasales`;

chartkinerjasales.padding(40, 40, 40, 40);

var categoryAxis = chartkinerjasales.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "Sales";
categoryAxis.renderer.minGridDistance = 60;

var valueAxis = chartkinerjasales.yAxes.push(new am4charts.ValueAxis());

var series = chartkinerjasales.series.push(new am4charts.ColumnSeries());
series.dataFields.categoryX = "Sales";
series.dataFields.valueY = "visits";
series.tooltipText = "{valueY.value}"
series.columns.template.strokeOpacity = 0;

chartkinerjasales.cursor = new am4charts.XYCursor();

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", (fill, target) => {
    return chartkinerjasales.colors.getIndex(target.dataItem.index);
});
//--------------------------------------------------
// Themes begin

// Themes end

// Create chart instance
var chartsales = am4core.create("chartsales", am4charts.PieChart);

// Add and configure Series
var pieSeries = chartsales.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "Total";
pieSeries.dataFields.category = "Status";

// Let's cut a hole in our Pie chart the size of 30% the radius
chartsales.innerRadius = am4core.percent(30);

// Put a thick white border around each Slice
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;
pieSeries.slices.template
    // change the cursor on hover to make it apparent the object can be interacted with
    .cursorOverStyle = [
    {
        "property": "cursor",
        "value": "pointer"
    }
];
var colorSet = new am4core.ColorSet();
colorSet.list = ["#ff0900", "#32b9b3"].map(function (color) {
    return new am4core.color(color);
});
pieSeries.colors = colorSet;
pieSeries.alignLabels = false;
pieSeries.labels.template.bent = true;
pieSeries.labels.template.radius = 3;
pieSeries.labels.template.padding(0, 0, 0, 0);

pieSeries.ticks.template.disabled = true;

// Create a base filter effect (as if it's not there) for the hover to return to
var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
shadow.opacity = 0;

// Create hover state
var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

// Slightly shift the shadow and make it more prominent on hover
var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
hoverShadow.opacity = 0.7;
hoverShadow.blur = 5;

// Add a legend
chartsales.legend = new am4charts.Legend();

chartsales.dataSource.url = `${base_url}chart/sales`;
//-----------------------------------
// Themes begin

// Themes end

// Create chart instance
var chartstockunit = am4core.create("chartstockunit", am4charts.PieChart);

// Add and configure Series
var pieSeries = chartstockunit.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "Total";
pieSeries.dataFields.category = "Status";

// Let's cut a hole in our Pie chart the size of 30% the radius
chartstockunit.innerRadius = am4core.percent(30);

// Put a thick white border around each Slice
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;
pieSeries.slices.template
    // change the cursor on hover to make it apparent the object can be interacted with
    .cursorOverStyle = [
    {
        "property": "cursor",
        "value": "pointer"
    }
];
var colorSet = new am4core.ColorSet();
colorSet.list = ["#ff0900", "#32b9b3"].map(function (color) {
    return new am4core.color(color);
});
pieSeries.colors = colorSet;
pieSeries.alignLabels = false;
pieSeries.labels.template.bent = true;
pieSeries.labels.template.radius = 3;
pieSeries.labels.template.padding(0, 0, 0, 0);

pieSeries.ticks.template.disabled = true;

// Create a base filter effect (as if it's not there) for the hover to return to
var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
shadow.opacity = 0;

// Create hover state
var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

// Slightly shift the shadow and make it more prominent on hover
var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
hoverShadow.opacity = 0.7;
hoverShadow.blur = 5;

// Add a legend
chartstockunit.legend = new am4charts.Legend();

chartstockunit.dataSource.url = `${base_url}chart/unit`;
//------------------------------------------------------
// Themes begin

// Themes end

// Create chart instance
var chartdp = am4core.create("chartdp", am4charts.PieChart);

// Add and configure Series
var pieSeries = chartdp.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "Total";
pieSeries.dataFields.category = "Status";

// Let's cut a hole in our Pie chart the size of 30% the radius
chartdp.innerRadius = am4core.percent(30);

// Put a thick white border around each Slice
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;
pieSeries.slices.template
    // change the cursor on hover to make it apparent the object can be interacted with
    .cursorOverStyle = [
    {
        "property": "cursor",
        "value": "pointer"
    }
];
var colorSet = new am4core.ColorSet();
colorSet.list = ["#ff0900", "#32b9b3"].map(function (color) {
    return new am4core.color(color);
});
pieSeries.colors = colorSet;
pieSeries.alignLabels = false;
pieSeries.labels.template.bent = true;
pieSeries.labels.template.radius = 3;
pieSeries.labels.template.padding(0, 0, 0, 0);

pieSeries.ticks.template.disabled = true;

// Create a base filter effect (as if it's not there) for the hover to return to
var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
shadow.opacity = 0;

// Create hover state
var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

// Slightly shift the shadow and make it more prominent on hover
var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
hoverShadow.opacity = 0.7;
hoverShadow.blur = 5;

// Add a legend
chartdp.legend = new am4charts.Legend();

chartdp.dataSource.url = `${base_url}chart/commission`;

document.querySelector('.btn-print').addEventListener('click', e => {
    var ids = ["chartsales", "chartstockunit", 'chartgroupunit', 'chartkinerjasales', 'chartdp', 'chartcommission'];
    var chartsRemaining = ids.length;

    var exportOptions = {
        "quality": 1,
        "scale": 2
    };

    ids.forEach(id => {

        window[id].exporting.getImage("png", exportOptions).then(function (imgData) {

            // save image data to chart itself for later reference
            window[id].exportedImage = imgData;

            // one more chart complete :-)
            chartsRemaining--;

            // Check if we got all of the charts
            if (chartsRemaining == 0) {
                // Yup, we got all of them
                // Let's proceed to putting PDF together

                // begin PDF layout
                var layout = {
                    "content": []
                };

                // add some text
                layout.content.push({
                    "text": "Chart Sales",
                    "fontSize": 20,
                    margin: [0, 20, 0, 15]
                });

                // add chart 1
                layout.content.push({
                    "image": chartsales.exportedImage,
                    "fit": [523, 300]
                });

                // add another text
                layout.content.push({
                    "text": "Chart Stock Unit",
                    "fontSize": 20,
                    margin: [0, 20, 0, 15]
                });

                // add chart 2
                layout.content.push({
                    "image": chartstockunit.exportedImage,
                    "fit": [523, 300]
                });

                layout.content.push({
                    "text": "",
                    margin: [0,10,0,10]
                });

                layout.content.push({
                    "text": "Chart Group Unit",
                    "fontSize": 20,
                    margin: [0, 20, 0, 15]
                });

                layout.content.push({
                    "image": chartgroupunit.exportedImage,
                    "fit": [523, 300]
                });

                layout.content.push({
                    "text": "Chart Kinerja Sales",
                    "fontSize": 20,
                    margin: [0, 20, 0, 15]
                });

                layout.content.push({
                    "image": chartkinerjasales.exportedImage,
                    "fit": [523, 300]
                });

                layout.content.push({
                    "text": "Chart DP",
                    "fontSize": 20,
                    margin: [0, 10, 0, 15]
                });

                layout.content.push({
                    "image": chartdp.exportedImage,
                    "fit": [523, 300]
                });

                layout.content.push({
                    "text": "Chart Commission",
                    "fontSize": 20,
                    margin: [0, 20, 0, 15]
                });

                layout.content.push({
                    "image": chartcommission.exportedImage,
                    "fit": [523, 300]
                });

                // get pdfMake instance from v4 exporting
                chartcommission.exporting.pdfmake.then(function (pdfMake) {
                    let today = new Date();
                    let dd = today.getDate();
                    let mm = today.getMonth()+1; //As January is 0.
                    let yyyy = today.getFullYear();

                    if(dd<10) dd='0'+dd;
                    if(mm<10) mm='0'+mm;
                    pdfMake.createPdf(layout).download(`Report ${yyyy}-${mm}-${dd}.pdf`);
                });

            }
        })

    });

})