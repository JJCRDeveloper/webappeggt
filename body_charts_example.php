<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div class="page-content-wrapper">
    <div class="page-content" style="background: #f0f0f0;" id="contenido_analytics_timeline">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="#" style="color: #00d2eb; font-weight: bold;text-transform: capitalize;"><?php echo _('analytics'); ?></a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="javascript:loadTimeline()" style="text-transform: capitalize;"><?php echo _('Timeline'); ?></a>

                </li>
            </ul>
        </div>
        <div class="row margin-top-30" style="margin-left: 45px; margin-right: 45px;">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="#" style="border: #9904ff 2px solid; background-color: white; border-radius: 5px;">

                    <div class="details" style="right: inherit;">
                        <div class="number" style="color: #9904ff;text-align: left;padding-left: 30px;">
                            <span data-counter="counterup" data-value="<?= $total_monuments;?>" style="color: #9904ff;font-size: 50;font-weight: bold;"><?= $total_monuments;?></span>
                        </div>
                        <div class="desc" style="color: #9904ff;text-align: left;padding-left: 30px;"> <b style="color: #9904ff;"><?php echo _('Total Monuments'); ?></b> <br> <span style="color: gray;"><?php echo _('this month'); ?></span> </div>
                    </div>
                    <div class="visual" style="float: right;">
                        <i>
                            <img src="<?php echo base_url('assets/images/icons/analytics-info.png'); ?>"
                                style="margin-left: 51;padding-bottom: 20; height: 50;width: 30;"/>
                        </i>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="#" style="border: #9904ff 2px solid; background-color: white; border-radius: 5px;">

                    <div class="details" style="right: inherit;">
                        <div class="number" style="color: #9904ff;text-align: left;padding-left: 30px;">
                            <span data-counter="counterup" data-value="<?= $damaged_monuments;?>" style="color: #9904ff;font-size: 50;font-weight: bold;"><?= $damaged_monuments;?></span>
                        </div>
                        <div class="desc" style="color: #9904ff;text-align: left;padding-left: 30px;"> <b style="color: #9904ff;"><?php echo _('Direccionales'); ?></b> <br> <span style="color: gray;"><?php echo _('this month'); ?></span> </div>
                    </div>
                    <div class="visual" style="float: right;">
                        <i>
                            <img src="<?php echo base_url('assets/images/icons/analytics-info.png'); ?>"
                                 style="margin-left: 51;padding-bottom: 20; height: 50;width: 30;"/>
                        </i>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="#" style="border: #9904ff 2px solid; background-color: white; border-radius: 5px;">

                    <div class="details" style="right: inherit;">
                        <div class="number" style="color: #9904ff;text-align: left;padding-left: 30px;">
                            <span data-counter="counterup" data-value="<?= $new_monuments;?>" style="color: #9904ff;font-size: 50;font-weight: bold;"><?= $new_monuments;?></span>
                        </div>
                        <div class="desc" style="color: #9904ff;text-align: left;padding-left: 30px;"> <b style="color: #9904ff;"><?php echo _('New Monuments'); ?></b> <br> <span style="color: gray;"><?php echo _('this month'); ?></span> </div>
                    </div>
                    <div class="visual" style="float: right;">
                        <i>
                            <img src="<?php echo base_url('assets/images/icons/analytics-info.png'); ?>"
                                 style="margin-left: 51;padding-bottom: 20; height: 50;width: 30;"/>
                        </i>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="#" style="border: #9904ff 2px solid; background-color: white; border-radius: 5px;">

                    <div class="details" style="right: inherit;">
                        <div class="desc" style="color: #9904ff;text-align: left;padding-left: 30px;">
                            <span  style="color: #9904ff;font-size: 36;font-weight: bold; margin-top: 20;">PREMIER</span>
                        </div>
                        <div class="desc" style="color: #9904ff;text-align: left;padding-left: 30px;"> <b style="color: #9904ff;"><?php echo _('Leaders'); ?></b> <br> <span style="color: gray;"><?php echo _('this month'); ?></span> </div>
                    </div>
                    <div class="visual" style="float: right;">
                        <i>
                            <img src="<?php echo base_url('assets/images/icons/analytics-info.png'); ?>"
                                 style="margin-left: 51;padding-bottom: 20; height: 50;width: 30;"/>
                        </i>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 teal" href="#" style="border: #9904ff 2px solid; background-color: white; border-radius: 5px;">
                    <div class="visual" style="float: right;">
                        <i><img src="<?php echo base_url('assets/images/icons/analytics-muppie.png'); ?>"
                                style="margin-left: 51;padding-bottom: 20; height: 110;width: 50;"/></i>
                    </div>
                    <div class="details" style="right: inherit;">
                        <div class="number" style="color: #9904ff;text-align: left;padding-left: 30px;">
                            <span data-counter="counterup" data-value="<?php echo $muppies;?>" style="color: #9904ff;font-size: 50;font-weight: bold;"><?php echo $muppies;?></span>
                        </div>
                        <div class="desc" style="color: #9904ff;text-align: left;padding-left: 30px;"> <b style="color: #9904ff;"><?php echo _('Muppies'); ?></b></div>
                    </div>
                    <div class="action" style="background: #9904ff; color: white;">
                        <div class="title">
                            <span><?php echo _('Monuments'); ?></span>
                            <i class="custom-dashboard-icons custom-dashboard-action"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 teal" href="#" style="border: #9904ff 2px solid; background-color: white; border-radius: 5px;">
                    <div class="visual" style="float: right;">
                        <i><img src="<?php echo base_url('assets/images/icons/analytics-billboard.png'); ?>"
                                style=" height: 110; width: 90px; margin-left: 10; padding-bottom: 20;"/></i>
                    </div>
                    <div class="details" style="right: inherit;">
                        <div class="number" style="color: #9904ff;text-align: left;padding-left: 30px;">
                            <span data-counter="counterup" data-value="<?php echo $vallas;?>" style="color: #9904ff;font-size: 50;font-weight: bold;"><?php echo $vallas;?></span>
                        </div>
                        <div class="desc" style="color: #9904ff;text-align: left;padding-left: 30px;"> <b style="color: #9904ff;"><?php echo _('Billboards'); ?></b> </div>
                    </div>
                    <div class="action" style="background: #9904ff; color: white;">
                        <div class="title">
                            <span><?php echo _('Monuments'); ?></span>
                            <i class="custom-dashboard-icons custom-dashboard-action"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 teal" href="#" style="border: #9904ff 2px solid; background-color: white; border-radius: 5px;">
                    <div class="visual" style="float: right;">
                        <i><img src="<?php echo base_url('assets/images/icons/analytics-muppie.png'); ?>"
                                style="margin-left: 51;padding-bottom: 20; height: 110;width: 50;"/></i>
                    </div>
                    <div class="details" style="right: inherit;">
                        <div class="number" style="color: #9904ff;text-align: left;padding-left: 30px;">
                            <span data-counter="counterup" data-value="<?php echo $direccional;?>" style="color: #9904ff;font-size: 50;font-weight: bold;"><?php echo $direccional;?></span>
                        </div>
                        <div class="desc" style="color: #9904ff;text-align: left;padding-left: 30px;"> <b style="color: #9904ff;"><?php echo _('Direccionales'); ?></b></div>
                    </div>
                    <div class="action" style="background: #9904ff; color: white;">
                        <div class="title">
                            <span><?php echo _('Monuments'); ?></span>
                            <i class="custom-dashboard-icons custom-dashboard-action"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 teal" href="#" style="border: #9904ff 2px solid; background-color: white; border-radius: 5px;">
                    <div class="visual" style="float: right;">
                        <i><img src="<?php echo base_url('assets/images/icons/analytics-tele_digital.png'); ?>"
                                style="margin-left: 51;padding-bottom: 20; height: 110;width: 50;"/></i>
                    </div>
                    <div class="details" style="right: inherit;">
                        <div class="number" style="color: #9904ff;text-align: left;padding-left: 30px;">
                            <span data-counter="counterup" data-value="<?php echo $tele_digital;?>" style="color: #9904ff;font-size: 50;font-weight: bold;"><?php echo $tele_digital;?></span>
                        </div>
                        <div class="desc" style="color: #9904ff;text-align: left;padding-left: 30px;"> <b style="color: #9904ff;"><?php echo _('Digital Signage'); ?></b></div>
                    </div>
                    <div class="action" style="background: #9904ff; color: white;">
                        <div class="title">
                            <span><?php echo _('Monuments'); ?></span>
                            <i class="custom-dashboard-icons custom-dashboard-action"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row" style=" height: 500px; background: white; border-radius: 5px;padding: 15px; margin-bottom: 25px; margin-left: 50px; margin-right: 50px; ">
            <div id="top_x_div" class="col-md-offset-2 col-md-8"  style="width: 1000px; height: 100%; background: white; border-radius: 5px;">
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px; margin-left: 20px; height: 500px; margin-left: 50px; margin-right: 50px;">
            <div id="chart_div" class="col-md-5" style="width: 800px;  background: white; border-radius: 5px;padding: 15px; margin-bottom: 25px;"></div>
                <div class="col-md-2" style="padding-left: 0; margin-left: 0; padding-right: 0; margin-right: 0; height: 100%;">
                    <div class="col-md-5" style="background: white; height: 95%;width: 100%;border-bottom-right-radius: 5px;border-top-right-radius: 5px;">

                    </div>
                    <div class="col-md-offset-2 col-md-5" style="background: white; height: 95%;width: 100%;border-bottom-left-radius: 5px;border-top-left-radius: 5px;">

                    </div>
                </div>
            <div id="chart_div_2" class=" col-md-5" style="width: 800px;  background: white; border-radius: 5px;padding: 15px; margin-bottom: 25px; "></div>
        </div>
        <div class="row" style=" height: 500px; background: white; border-radius: 5px;padding: 15px; margin-bottom: 25px; margin-left: 50px; margin-right: 50px;">
            <div class="col-md-1"></div>
            <div class="col-md-8" id="top_x_div_1" style="width: 100%; height: 100%; background: white; border-radius: 5px; margin-left: 50px;"></div>

        </div>
        <div class="row" style=" height: 500px; background: white; border-radius: 5px;padding: 15px; margin-bottom: 25px; margin-left: 50px; margin-right: 50px;">
            <div class="col-md-1">  </div>
            <div id="top_x_div_2" class="col-md-8"  style="width: 100%; height: 100%; background: white; border-radius: 5px; margin-left: 60px;"></div>

        </div>
        <div class="row" style=" height: 500px; background: white; border-radius: 5px;padding: 15px; margin-bottom: 25px; margin-left: 50px; margin-right: 50px;">
            <div class="col-md-2">
                <br>
            </div>
            <div class="col-md-8" id="chart_div_3" style="margin-left: 50px; width: 900px; height: 100%;"></div>
            <div class="col-md-2" >
                <br>
            </div>
        </div>
        <script>
            //-----funcion para cargar el timeline------
            function loadTimeline()
            {
                document.getElementById("contenido_analytics_timeline").innerHTML = "";
                $("#contenido_analytics_timeline").load("<?php echo base_url('analytics/showTimeline'); ?>");
            }

            //------------------------Analytics------------------
            var graph01=<?php echo json_encode($graph_x_type); ?>;
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawStuff);
            function drawStuff() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Type');
                data.addColumn('number', 'Amount');
                //data.addColumn('number', 'mount');
                var i;
                for(i = 0; i < graph01.length; i++)
                    data.addRow([graph01[i].name, graph01[i].value]);
                var options = {
                    colors: ['#49c5d0'],
                    width: 800,
                    legend: { position: 'none' },
                    titleTextStyle: {
                        color: '#a6a8ab',    // any HTML string color ('red', '#cc00cc')
                        fontName:'Open Sans',
                        fontSize: 17,
                        bold: true,

                    },

                    chart: {
                        title: 'Amount by Type of Monument',
                        subtitle: 'Types of media' },
                    axes: {
                        x: {
                            0: { side: 'bottom', label: 'TYPES OF MEDIA'} // Bottom x-axis.
                        },
                        y:{
                            0: {side: 'left', label:'MONUMENTS'},
                        }
                    },
                    bar: { groupWidth: "90%" }
                };
                var chart = new google.charts.Bar(document.getElementById('top_x_div'));
                chart.draw(data, google.charts.Bar.convertOptions(options));
                //chart.draw(data, options);
            };

            //---dibujando el segundo chart--
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                // Create the data table.
                var graph02=<?php echo json_encode($graph_x_category); ?>;
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Categories');
                data.addColumn('number', 'Amount');
                var n;
                for(n = 0; n < graph02.length; n++)
                    data.addRow([graph02[n].name, graph02[n].value]);

                // Set chart options
                var options = {
                    colors: ['#49c5d0','#ea8415','#e01d1d','#0e6ed8','#bbdd62','#b30044','#bd18d5'],
                    title: 'Monuments By Category',
                    titleTextStyle: {
                        color: '#a6a8ab',    // any HTML string color ('red', '#cc00cc')
                        fontName:'Open Sans',
                        fontSize: 18
                    },
                    legend:{
                        textStyle: {color: '#9f9f9f'}
                    },
                    /*pieSliceTextStyle: {
                        color: '#a6a8ab'
                    },*/
                    'width':'100%',
                    'height':'100%'};

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }

            //---dibujando el tercer chart--
            //google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart1);
            function drawChart1() {
                // Create the data table.
                var graph03=<?php echo json_encode($graph_x_route); ?>;
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Routes');
                data.addColumn('number', 'Amount');
                var n;
                for(n = 0; n < graph03.length; n++)
                    data.addRow([graph03[n].name, graph03[n].value]);

                // Set chart options
                var options = {
                    colors: ['#49c5d0','#bd18d5','#ea8415','#e01d1d','#0e6ed8','#bbdd62','#b30044'],
                    title: 'Monuments By Routes',
                    titleTextStyle: {
                        color: '#a6a8ab',    // any HTML string color ('red', '#cc00cc')
                        fontName:'Open Sans',
                        fontSize: 18
                    },
                    legend:{
                        textStyle: {color: '#9f9f9f'}
                    },
                    'width': '150%',
                    'height':'100%'};

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div_2'));
                chart.draw(data, options);
            }
            //-------------dibujando la 4ta grafica--
            //google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawStuff1);
            function drawStuff1() {
                var graph04=<?php echo json_encode($graph_x_typevsweek); ?>;
                //console.log(graph04);
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Week');
                data.addColumn('number', 'Valla');
                data.addColumn('number', 'Direccional');
                data.addColumn('number', 'Tele Digital');
                data.addColumn('number', 'Muppie');
                var x;
                for(x=0;x<graph04.length;x++){
                    var arreglo=graph04[x].array;
                    var semana=graph04[x].name;
                    var valla;
                    var direccional;
                    var tele_digital;
                    var muppie;
                    var i;
                    for(i = 0; i < arreglo.length; i++){
                        if(arreglo[i].id==17)
                        {
                            valla=arreglo[i].value;
                        }
                        else if(arreglo[i].id==18){
                            direccional=arreglo[i].value;
                        }
                        else if(arreglo[i].id==20){
                            tele_digital=arreglo[i].value;
                        }
                        else if(arreglo[i].id==21){
                            muppie=arreglo[i].value;
                        }
                        //data.addRow([nombre,arreglo[i].name, arreglo[i].value]);
                    }
                    data.addRow([semana,valla, direccional,tele_digital,muppie]);
                }

                var options = {
                    width: 900,
                    colors: ['#49c5d0','#bbdd62','#ea8415','#e01d1d','#0e6ed8','#b30044','#bd18d5'],
                    legend: { position: 'none' },
                    titleTextStyle: {
                        color: '#a6a8ab',    // any HTML string color ('red', '#cc00cc')
                        fontName:'Open Sans',
                        fontSize: 17,
                        bold: true,

                    },
                    chart: {
                        title: 'Amount by Type of Monument Vs Weeks',
                        subtitle: 'Types of media' },
                    axes: {
                        x: {
                            0: { side: 'bottom', label: 'TYPES OF MEDIA'} // Bottom x-axis.
                        },
                        y:{
                            0: {side: 'left', label:'MONUMENTS'},
                        }
                    },
                    bar: { groupWidth: "90%" }
                };
                var chart = new google.charts.Bar(document.getElementById('top_x_div_1'));
                chart.draw(data, google.charts.Bar.convertOptions(options));
                //chart.draw(data, options);
            }

            //-------------dibujando la 5ta grafica-------

            //google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawStuff2);
            function drawStuff2() {
                var graph04=<?php echo json_encode($graph_x_categoryvsweek); ?>;
                //console.log(graph04);
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Week');//
                data.addColumn('number', 'Alcoholic Drinks');//1
                data.addColumn('number', 'Cars');//8
                data.addColumn('number', 'Cloth');//9
                data.addColumn('number', 'Drinks');//11
                data.addColumn('number', 'Food');//12
                data.addColumn('number', 'Massive Consume');//13
                data.addColumn('number', 'Music');//14
                data.addColumn('number', 'Technology');//15
                data.addColumn('number', 'Telephony');//16
                data.addColumn('number', 'Sports');//17
                var x;
                for(x=0;x<graph04.length;x++){
                    var arreglo=graph04[x].array;
                    var semana=graph04[x].name;
                    var alcoholic_drinks;//1
                    var cars;//8
                    var cloth;//9
                    var drinks;//11
                    var food;//12
                    var massive_consume;//13
                    var music;//14
                    var technology;//15
                    var telephony;//16
                    var sports;//17
                    var i;
                    for(i = 0; i < arreglo.length; i++){
                        if(arreglo[i].id==1)
                        {
                            alcoholic_drinks=arreglo[i].value;
                        }
                        else if(arreglo[i].id==8){
                            cars=arreglo[i].value;
                        }
                        else if(arreglo[i].id==9){
                            cloth=arreglo[i].value;
                        }
                        else if(arreglo[i].id==11){
                            drinks=arreglo[i].value;
                        }
                        else if(arreglo[i].id==12){
                            food=arreglo[i].value;
                        }
                        else if(arreglo[i].id==13){
                            massive_consume=arreglo[i].value;
                        }
                        else if(arreglo[i].id==14){
                            music=arreglo[i].value;
                        }
                        else if(arreglo[i].id==15){
                            technology=arreglo[i].value;
                        }
                        else if(arreglo[i].id==16){
                            telephony=arreglo[i].value;
                        }
                        else if(arreglo[i].id==17){
                            sports=arreglo[i].value;
                        }
                        //data.addRow([nombre,arreglo[i].name, arreglo[i].value]);
                    }
                    data.addRow([
                                semana,
                                alcoholic_drinks,
                                cars,
                                cloth,
                                drinks,
                                food,
                                massive_consume,
                                music,
                                technology,
                                telephony,
                                sports
                                ]
                    );
                }

                var options = {
                    colors: ['#49c5d0','#bbdd62','#b30044','#ea8415','#e01d1d','#0e6ed8','#bd18d5'],
                    titleTextStyle: {
                        color: '#a6a8ab',    // any HTML string color ('red', '#cc00cc')
                        fontName:'Open Sans',
                        fontSize: 17,
                        bold: true,

                    },
                    width: 900,
                    legend: { position: 'none' },
                    chart: {
                        title: 'Amount by Category Monument vs Week',
                        subtitle: 'Types of media' },
                    axes: {
                        x: {
                            0: { side: 'bottom', label: 'CATEGORIES'} // Bottom x-axis.
                        },
                        y:{
                            0: {side: 'left', label:'MONUMENTS'},
                        }
                    },
                    bar: { groupWidth: "90%" }
                };
                var chart = new google.charts.Bar(document.getElementById('top_x_div_2'));
                chart.draw(data, google.charts.Bar.convertOptions(options));
                //chart.draw(data, options);
            }

            //---dibujando 6ta grafica New Vs Repeated--
            //google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart2);
            function drawChart2() {
                // Create the data table.
                var graph02=<?php echo json_encode($graph_new_vs_repeated); ?>;
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'New or Repeated');
                data.addColumn('number', 'Amount');
                var n;
                for(n = 0; n < graph02.length; n++)
                    data.addRow([graph02[n].name, graph02[n].value]);

                // Set chart options
                var options = {
                    colors: ['#49c5d0','#bd18d5','#ea8415','#e01d1d','#0e6ed8','#bbdd62','#b30044'],
                    title: 'New Monuments Vs Repeated Monuments',
                    titleTextStyle: {
                        color: '#a6a8ab',    // any HTML string color ('red', '#cc00cc')
                        fontName:'Open Sans',
                        fontSize: 18
                    },
                    legend:{
                        textStyle: {color: '#9f9f9f'}
                    },
                    'width':900,
                    'height':'100%'};

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div_3'));
                chart.draw(data, options);
            }

        </script>

    </div>
</div>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 100%; height: 100%;"></div>
  </body>
</html>

<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Elecciones Generales de Guatemala 2019</div>
          <div class="card-body" id="piechart_3d" style="width: 900px; height: 500px;">
              <div ></div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>