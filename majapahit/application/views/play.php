<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="../../assets/ico/favicon.ico"> -->

    <title>Majapahit Wars</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()."assets/css/"; ?>bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url()."assets/css/"; ?>bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/"; ?>jquery-ui-1.10.4.custom.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()."assets/css/"; ?>theme.css" rel="stylesheet">    
  
  </head>

  <body role="document" data-spy="scroll" data-target=".navigation-spy">
  	<div class="navbar navbar-inverse navbar-fixed-top">
    	<div class="container">
			<div class="navbar-header">        
        		<a class="navbar-brand" href="<?php echo base_url()."play" ?>">
                	<span class="glyphicon glyphicon-globe glyphicon-custom"></span>
                </a>
 				<button class="navbar-toggle" data-toggle="collapse" data-target="#navHeaderCollapse">
    	        	<span class="icon-bar"></span>
        	        <span class="icon-bar"></span>
            	    <span class="icon-bar"></span>
            	</button>
        	</div>
            <div class="collapse navbar-collapse navigation-spy" id="navHeaderCollapse">        		
                <ul class="nav navbar-nav navbar-left">                
                	<li>
                    	<a href="<?php echo base_url()."play" ?>">
                			<span id="top-panel-village"></span>
                		</a>
                    </li>
                    <li>
                    	
                    	<a href="#"><span class='glyphicon glyphicon-leaf glyphicon-custom'></span> <span id="top-panel-food"></span></a>               			         
                    </li>
                    <li>
                    	<a href="#"><span class='glyphicon glyphicon-tree-conifer glyphicon-custom'></span> <span id="top-panel-wood"></span></a>
                    </li>
                    <li>
                    	<a href="#"><span class='glyphicon glyphicon-usd glyphicon-custom'></span> <span id="top-panel-gold"></span></a>
                    </li>
                                        
                </ul>                
                <ul class="nav navbar-nav navbar-right">                	
                    <li>
                    	<a href="<?php echo base_url()."play/log_out" ?>" class="navbar-custom">
            				<span class="glyphicon glyphicon-off glyphicon-custom"></span> <span>Log Out</span>
                		</a>
                    </li>
                                        
                </ul>                
            </div>            
        </div>
    </div>
    
    <div class="navbar navbar-default navbar-fixed-bottom">
    	<div class="container">
    		<p class="navbar-text pull-right">Best Viewed on HTML5 / CSS3 Supported Web Browser</p>
        </div>
    </div>
    
    
    
  	
    <div class="container">
    	<div class="spacer"></div>
        <div class="row">
        	<div class="col-md-3">
            	<blockquote class="blockquote-reverse">
                	<h2><strong><span class="glyphicon glyphicon-dashboard"></span> Welcome,</strong></h2>
                    <h4><footer id="player"></footer></h4> 
                </blockquote>
                <h4 class="text-primary">Player Informations</h4>
                <ul class="list-group">
                	<li class="list-group-item">
                    	<h4  class="list-group-item-heading">Rank <span class="label label-info pull-right" id="ranking"></span></h4>
                        <p>your ranking in this game. <a href="#players-rankings" data-toggle="modal">see other players ranking</a></p>
                    </li>
                    <li class="list-group-item">
                    	<h4 class="list-group-item-heading">Points <span class="label label-warning pull-right" id="point"></span></h4>                   	
                        <p>point is sum from all resources and troops in your village</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
            	<div class="panel panel-default">
            		<div class="panel-heading">
                    	<h3 class="panel-title">Farm<span class="badge pull-right" id="farm-amounts"></span></h3>
                        <span class="label label-success">Foods Schedules</span>
                    </div>
                    <div class="panel-body">
                    	<blockquote><p>Place for food production</p><footer>Farm produce 15 foods each 5 minutes </footer></blockquote>
                    	<div class="table-responsive"><table class="table table-striped table-hover text-center" id="food-schedules"></table></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            	<div class="panel panel-default">
            		<div class="panel-heading">
                    	<h3 class="panel-title">Lumber Camp<span class="badge pull-right" id="lumber-camp-amounts"></span></h3>
                        <span class="label label-success">Woods Schedules</span>
                    </div>
                    <div class="panel-body">
                    	<blockquote><p>Place for wood production</p><footer>Lumber camp produce 15 woods each 5 minutes </footer></blockquote>
                    	<div class="table-responsive"><table class="table table-striped table-hover text-center" id="wood-schedules"></table></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            	<div class="panel panel-default">
            		<div class="panel-heading">
                    	<h3 class="panel-title">Mining Camp<span class="badge pull-right" id="mining-camp-amounts"></span></h3>
                        <span class="label label-success">Golds Schedules</span>
                    </div>
                    <div class="panel-body">
                    	<blockquote><p>Place for gold production</p><footer>Gold camp produce 15 golds each 5 minutes </footer></blockquote>
                    	<div class="table-responsive"><table class="table table-striped table-hover text-center" id="gold-schedules"></table></div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
        	<div class="col-md-4">
            	<div class="borderline"></div>
                <blockquote>
                	<h3 class="text-danger"><span class="glyphicon glyphicon-fire"></span> Enemy Attacks</h3>
                	<footer>beware, your village is under attack. prepare yourself</footer>
                </blockquote>
                <p>table indicate your village's attacker and when will their troop reach your village</p>
                <p class=" text-right">total attack : <span class="label label-danger" id="enemy-attack-amounts"></span></p>
                <div class="table-responsive"><table class="table table-striped table-hover text-center" id="enemy-attack-schedules"></table></div>
                               
            </div>
            <div class="col-md-5">
		<div class="borderline"></div>
            	<blockquote class="blockquote-reverse">
                	<h3 class="text-warning">Troops Attacks <span class="glyphicon glyphicon-arrow-up"></span></h3>
                	<footer>your troop are attacking. pray for successful attack</footer>
                </blockquote>
                <p>table indicate your troop and when will they reach destinate village</p>
                <p class=" text-right">total attack : <span class="label label-success" id="troop-attack-amounts"></span></p>
                <div class="table-responsive"><table class="table table-striped table-hover text-center" id="troop-attack-schedules"></table></div>
                
            </div>
            <div class="col-md-3">
		<div class="borderline"></div>
            	<blockquote>
                	<h3 class="text-success"><span class="glyphicon glyphicon-user"></span> Villages Troops</h3>
                    <footer>those who defend your village</footer>
                </blockquote>
                <p>table indicate total troop that currently stay at your village</p>
                
                <p class=" text-right">total troops : <span class="label label-primary" id="troops-amounts"></span></p>
                <div class="table-responsive"><table class="table table-striped table-hover text-center" id="villages-troops"></table></div>                       
            </div>
        	    
        </div>
        
        <div class="row">
        	<div class="col-md-3">
            	<div class="panel panel-danger">
            		<div class="panel-heading">
                    	<h3 class="panel-title"><strong><span class="glyphicon glyphicon-arrow-up"></span> Order Attack</strong></h3>
                    </div>
                    <div class="panel-body">
                    	<blockquote><p>Plan an attack</p><footer>Sent your troop to attack other villages for resources </footer></blockquote>            
                                
                        <div class="row">
                    		<div class="col-xs-2 text-center">
                            	<div style="margin-bottom:10px"><span class="glyphicon glyphicon-cutlery text-primary"></span></div>                          	    <div style="height:200px"  id="kris-swordman-slider"></div>
                                <div style="margin-top:10px" id="kris-swordman-slider-amount" class="text-success">0</div>
                            </div>
                        	<div class="col-xs-2 text-center">
                            	<div style="margin-bottom:10px"><span class="glyphicon glyphicon-tower text-primary"></span></div>
                            	<div style="height:200px" id="bhayangkara-slider"></div>
                                <div style="margin-top:10px" id="bhayangkara-slider-amount" class="text-success">0</div>
                            </div>
                            <div class="col-xs-8">
                            	<div class="form-group">
                                	<label class="text-warning" for=""><span class="glyphicon glyphicon-globe"></span> Target Village</label>
                                    <input type="text" class="form-control" id="target-village">
                                    <p class="text-right"><a href="#players-locations" data-toggle="modal">See All Villages</a></p>
                                </div>
                                <fieldset disabled>
                                <div class="form-group">
                                	<label class="text-danger" for=""><span class="glyphicon glyphicon-cutlery"></span> Travel Time</label>
                                    <input type="text" class="form-control" id="ks-traveltime">
                                </div>
                                <div class="form-group">
                                	<label class="text-danger" for=""><span class="glyphicon glyphicon-tower"></span> Travel Time</label>
                                    <input type="text" class="form-control" id="b-traveltime">
                                </div>
                                </fieldset>
                            	<button class="btn btn-danger pull-right" id="attack-button">attack</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        	
            <div class="col-md-5">
            	<div class="borderline"></div>
            	<blockquote class="blockquote-reverse">
                	<h3 class="text-success">Troops Backs <span class="glyphicon glyphicon-arrow-down"></span></h3>
                	<footer>welcome and congratulate our heroes </footer>
                </blockquote>
                <p>table indicate how many troop survive in your attack and when will they arrive at your village</p>
                <p class=" text-right">total back : <span class="label label-warning" id="troop-back-amounts"></span></p>
                <div class="table-responsive"><table class="table table-striped table-hover text-center" id="troop-back-schedules"></table></div>
            	               	
            </div>
            <div class="col-md-4">
            	<div class="borderline"></div>
            	<blockquote>
                	<h3 class="text-primary"><span class="glyphicon glyphicon-gift"></span> War Loots</h3>
                	<footer>heroes come back with glory for village</footer>
                </blockquote>
                <p>table indicate resources that will arrive along with survivor from your attack</p>
                <p class=" text-right">total war loots : <span class="label label-success" id="war-loot-amounts"></span></p>
                <div class="table-responsive"><table class="table table-striped table-hover" id="war-loot-schedules"></table></div>
                
            </div>
            
        </div>
     
        <div class="row">
        	
        	<div class="col-md-3">
            	<div class="borderline"></div>
            	<blockquote>
                	<h3 class="text-warning"><span class="glyphicon glyphicon-road"></span> Town Center</h3>
                	<footer>plan your village here</footer>
                </blockquote>
                
                <p class=" text-right">build list : <span class="label label-success" id="build-schedule-amounts"></span></p>
                <div class="table-responsive"><table class="table table-striped table-hover" id="building-build-schedules"></table></div>
                
            </div>
            <div class="col-md-9">
            	<div class="borderline"></div>
            	<blockquote class="blockquote-reverse">
                	<h3 class="text-success">Buildings List <span class="glyphicon glyphicon-home"></span> </h3>
                	<footer>develop your village. get prosperity</footer>
                </blockquote>
                <p>you can only build up to 6 building at time</p>
                <div class="row" id="building-prices">
                        
                        	
                            
                </div>
            	
            </div>
        </div>
        <div class="row">
        	<div class="col-md-3">
            	<div class="borderline"></div>
            	<blockquote class="blockquote-reverse">
                	<h3 class="text-danger">Barrack <span class="glyphicon glyphicon-star-empty"></span> </h3>
                	<footer>train your troops here</footer>
                </blockquote>
                <p class=" text-right">trainee list : <span class="label label-success" id="trainee-schedule-amounts"></span></p>
                <div class="table-responsive"><table class="table table-striped table-hover" id="village-troop-build-schedules"></table></div>
            	
                
            </div>
            <div class="col-md-6">
            	<div class="borderline"></div>
            	<blockquote>
                	<h3 class="text-info"><span class="glyphicon glyphicon-user"></span> Troops List </h3>
                	<footer>heroes born from here</footer>
                </blockquote>
                
                <p>to train a troop, you have to build barrack first. you can only build 15 troop per barrack</p>
                <div class="table-responsive"><table class="table table-striped table-hover text-center" id="troop-stats"></table></div>
                <ul class="list-inline text-success text-right">
                	<li><span class="glyphicon glyphicon-cutlery"></span> : kris swordman</li>
                    <li><span class="glyphicon glyphicon-tower"></span> : bhayangkara</li>
                </ul>
                <div class="row" id="troop-prices">
                        
                        	
                            
                </div>
            </div>
        </div>   
        <div class="spacer"></div>
    </div>
    
       
    
    <div class="modal fade" id="players-rankings" role="dialog">
    	<div class="modal-dialog">
        	<div class="modal-content">
            	
            		<div class="modal-header">
                		<h3>Players Rankings</h3>
               	 	</div>
                	<div class="modal-body">
                    	<div class="table-responsive">
                    	<table class="table table-striped table-hover text-center" id="villages-rankings"></table>                   	
                		</div>
                	</div>
                	<div class="modal-footer">
                		<button class="btn btn-default" data-dismiss="modal">Close</button>
                	</div>
                
            </div>
        </div>	
    </div>
    
    <div class="modal fade" id="players-locations" role="dialog">
    	<div class="modal-dialog">
        	<div class="modal-content">
            	
            		<div class="modal-header">
                		<h3>Villages Locations</h3>
               	 	</div>
                	<div class="modal-body">
                    	<div class="table-responsive">
                    	<table class="table table-striped table-hover text-center" id="villages-locations"></table>                   	
                		</div>
                	</div>
                	<div class="modal-footer">
                		<button class="btn btn-default" data-dismiss="modal">Close</button>
                	</div>
                
            </div>
        </div>	
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()."assets/js/"; ?>jquery-1.11.0.min.js"></script> 
    <script src="<?php echo base_url()."assets/js/"; ?>bootstrap.min.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>jquery-ui-1.10.4.custom.min.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>jquery.localScroll.min.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>jQueryRotateCompressed.js"></script>
    
    <script src="<?php echo base_url()."assets/js/"; ?>custom.js"></script>
    <script>
		
		$("#kris-swordman-slider").slider({
			value:0,
			orientation:"vertical",
			range:"min",
			min:0,
			animate:"true",
			slide : function(event,ui){
				$("#kris-swordman-slider-amount").text(ui.value);
			}
		});
		
		$("#bhayangkara-slider").slider({
			value:0,
			orientation:"vertical",
			range:"min",
			min:0,
			animate:"true",
			slide : function(event,ui){
				$("#bhayangkara-slider-amount").text(ui.value);
			}
		});
		
		$("#target-village").autocomplete({
			source:"<?php echo base_url()."play/target_village" ?>",
			select: function( event, ui ) {
				$(this).val( ui.item.village_name);
				$(this).attr("idvillage",ui.item.village);
				$("#ks-traveltime").val(ui.item.kris_swordman);
				$("#b-traveltime").val(ui.item.bhayangkara);
				return false;
			}
		}).data( "uiAutocomplete" )._renderItem = function( ul, item ) {
			return $("<li>")
			.append( $("<a>").text(item.village_name) )
			.appendTo( ul );
		};
		
		$("#attack-button").click(function(){
				var kris_swordman = $("#kris-swordman-slider-amount").text();
				var bhayangkara = $("#bhayangkara-slider-amount").text();
				var troop = "kris_swordman#"+kris_swordman+"bhayangkara#"+bhayangkara;
				var target_village = $("#target-village").attr("idvillage");					
					
				$.post("<?php echo base_url()."play/order_attack/" ?>",{troop : troop, target_village : target_village});
					
		});
		
		
		
		function orderbuilding(building){
					
			$.post("<?php echo base_url()."play/order_building/" ?>",{building : building});
		}
		
		function ordertroop(troop){
					
			$.post("<?php echo base_url()."play/order_troop/" ?>",{troop : troop});
		}
		
		var top_panel = new EventSource("<?php echo base_url()."play/top_panel_resources" ?>");
		top_panel.onmessage = function(event){
			
				var village_data = $.parseJSON(event.data);
				var village_name = village_data[0].village_name;
				var food = village_data[0].food;
				var wood = village_data[0].wood;
				var gold = village_data[0].gold;
			
				$("#top-panel-village").html(village_name);
				$("#top-panel-food").html(food);
				$("#top-panel-wood").html(wood);
				$("#top-panel-gold").html(gold);
			}
			
		var food_schedules = new EventSource("<?php echo base_url()."play/food_schedules" ?>");
		food_schedules.onmessage = function(event){
			
				$("#food-schedules").html("<tr><th class='text-center'>#</th><th class='text-center'>timespan</th><th class='text-center'><span class='glyphicon glyphicon-leaf'></span></th></tr>");
				var food_schedules_data = $.parseJSON(event.data);
				$.each(food_schedules_data,function(index){
					var time_span = food_schedules_data[index].time_span;
					var value = food_schedules_data[index].value;
					var number = index + 1;			
					$("#food-schedules").append("<tr><td>"+number+".</td><td>"+time_span+"</td><td>"+value+"</td></tr>");
				})
				
			}
			
		var wood_schedules = new EventSource("<?php echo base_url()."play/wood_schedules" ?>");
		wood_schedules.onmessage = function(event){
			
				$("#wood-schedules").html("<tr><th class='text-center'>#</th><th class='text-center'>timespan</th><th class='text-center'><span class='glyphicon glyphicon-tree-conifer'></span></th></tr>");
				var wood_schedules_data = $.parseJSON(event.data);
				$.each(wood_schedules_data,function(index){
					var time_span = wood_schedules_data[index].time_span;
					var value = wood_schedules_data[index].value;
					var number = index + 1;			
					$("#wood-schedules").append("<tr><td>"+number+".</td><td>"+time_span+"</td><td>"+value+"</td></tr>");
				})
				
			}
			
		var gold_schedules = new EventSource("<?php echo base_url()."play/gold_schedules" ?>");
		gold_schedules.onmessage = function(event){
			
				$("#gold-schedules").html("<tr><th class='text-center'>#</th><th class='text-center'>timespan</th><th class='text-center'><span class='glyphicon glyphicon-usd'></span></th></tr>");
				var gold_schedules_data = $.parseJSON(event.data);
				$.each(gold_schedules_data,function(index){
					var time_span = gold_schedules_data[index].time_span;
					var value = gold_schedules_data[index].value;
					var number = index + 1;			
					$("#gold-schedules").append("<tr><td>"+number+".</td><td>"+time_span+"</td><td>"+value+"</td></tr>");
				})
				
			}
		
		var troop_attack_schedules = new EventSource("<?php echo base_url()."play/troop_attack_schedules" ?>");
		troop_attack_schedules.onmessage = function(event){
			
				$("#troop-attack-schedules").html("<tr><th class='text-center'>#</th><th class='text-center'>timespan</th><th class='text-center'><span class='glyphicon glyphicon-arrow-up'></span></th><th class='text-center'><span class='glyphicon glyphicon-cutlery'></span></th><th class='text-center'><span class='glyphicon glyphicon-tower'></span></th></tr>");
				var troop_attack_schedules_data = $.parseJSON(event.data);
				$.each(troop_attack_schedules_data,function(index){
					var time_span = troop_attack_schedules_data[index].time_span;
					var target_village = troop_attack_schedules_data[index].target_village_name;
					var kris_swordman = troop_attack_schedules_data[index].kris_swordman;
					var bhayangkara = troop_attack_schedules_data[index].bhayangkara;
					var number = index + 1;			
					$("#troop-attack-schedules").append("<tr><td>"+number+".</td><td>"+time_span+"</td><td>"+target_village+"</td><td>"+kris_swordman+"</td><td>"+bhayangkara+"</td></tr>");
				})
				
			}
			
		var enemy_attack_schedules = new EventSource("<?php echo base_url()."play/enemy_attack_schedules" ?>");
		enemy_attack_schedules.onmessage = function(event){
			
				$("#enemy-attack-schedules").html("<tr><th class='text-center'>#</th><th class='text-center'>timespan</th><th class='text-center'><span class='glyphicon glyphicon-fire'></span></th></tr>");
				var enemy_attack_schedules_data = $.parseJSON(event.data);
				$.each(enemy_attack_schedules_data,function(index){
					var time_span = enemy_attack_schedules_data[index].time_span;
					var village = enemy_attack_schedules_data[index].village_name;
					var number = index + 1;			
					$("#enemy-attack-schedules").append("<tr><td>"+number+".</td><td>"+time_span+"</td><td>"+village+"</td></tr>");
				})
				
			}
			
		var villages_troops = new EventSource("<?php echo base_url()."play/villages_troops" ?>");
		villages_troops.onmessage = function(event){
			
				$("#villages-troops").html("<tr><th class='text-center'></th><th class='text-center'><span class='glyphicon glyphicon-cutlery'></span></th><th class='text-center'><span class='glyphicon glyphicon-tower'></span></th></tr>");
				var villages_troops_data = $.parseJSON(event.data);
				
				var kris_swordman = villages_troops_data[0].kris_swordman;
				var bhayangkara = villages_troops_data[0].bhayangkara;
				var troops_amounts = parseInt(kris_swordman) + parseInt(bhayangkara);
				$("#villages-troops").append("<tr><td>amount : </td><td>"+kris_swordman+"</td><td>"+bhayangkara+"</td></tr>");
				$("#troops-amounts").html(troops_amounts);
				$("#kris-swordman-slider").slider("option","max",parseInt(kris_swordman));
				$("#bhayangkara-slider").slider("option","max",parseInt(bhayangkara));
				
			}
			
		var troop_back_schedules = new EventSource("<?php echo base_url()."play/troop_back_schedules" ?>");
		troop_back_schedules.onmessage = function(event){
			
				$("#troop-back-schedules").html("<tr><th class='text-center'>#</th><th class='text-center'>timespan</th><th class='text-center'><span class='glyphicon glyphicon-user'></span></th><th class='text-center'>amount</th></tr>");
				var troop_back_schedules_data = $.parseJSON(event.data);
				$.each(troop_back_schedules_data,function(index){
					var time_span = troop_back_schedules_data[index].time_span;
					var troop_type = troop_back_schedules_data[index].troop;
					var amount = troop_back_schedules_data[index].amount;
					var number = index + 1;			
					$("#troop-back-schedules").append("<tr><td>"+number+".</td><td>"+time_span+"</td><td>"+troop_type+"</td><td>"+amount+"</td></tr>");
				})
				
			}
			
		var war_loot_schedules = new EventSource("<?php echo base_url()."play/war_loot_schedules" ?>");
		war_loot_schedules.onmessage = function(event){
			
				$("#war-loot-schedules").html("<tr><th class='text-center'>#</th><th class='text-center'>timespan</th><th class='text-center'>resource</th><th class='text-center'>amount</th></tr>");
				var war_loot_schedules_data = $.parseJSON(event.data);
				$.each(war_loot_schedules_data,function(index){
					var time_span = war_loot_schedules_data[index].time_span;
					var attribute = war_loot_schedules_data[index].attribute;
					var value = war_loot_schedules_data[index].value;
					var number = index + 1;			
					$("#war-loot-schedules").append("<tr><td>"+number+".</td><td>"+time_span+"</td><td>"+attribute+"</td><td>"+value+"</td></tr>");
				})
				
			}
			
		var building_build_schedules = new EventSource("<?php echo base_url()."play/village_building_build_schedules" ?>");
		building_build_schedules.onmessage = function(event){
			
				$("#building-build-schedules").html("<tr><th class='text-center'>#</th><th class='text-center'>timespan</th><th class='text-center'><span class='glyphicon glyphicon-home'></span></th></tr>");
				var building_build_schedules_data = $.parseJSON(event.data);
				$.each(building_build_schedules_data,function(index){
					var time_span = building_build_schedules_data[index].time_span;
					var building = building_build_schedules_data[index].building;
					var number = index + 1;			
					$("#building-build-schedules").append("<tr><td>"+number+".</td><td>"+time_span+"</td><td>"+building+"</td></tr>");
				})
		
			}
			
		var building_prices = new EventSource("<?php echo base_url()."play/building_prices" ?>");
		building_prices.onmessage = function(event){
			
				$("#building-prices").html("");
				var building_prices_data = $.parseJSON(event.data);
				$.each(building_prices_data,function(index){
					var building = building_prices_data[index].building;
					var food = building_prices_data[index].food;
					var wood = building_prices_data[index].wood;
					var gold = building_prices_data[index].gold;
					var build_time = building_prices_data[index].build_time;
					
					$("#building-prices").append(
						'<div class="col-md-3">'+
                         	'<div class="panel panel-warning">'+
								'<div class="panel-heading"><strong>'+building+'</strong></div>'+
                            	'<div class="panel-body">'+
                                    '<table class="table table-striped">'+                                    	
                                        '<tr>'+
                                        	'<td>Food</td><td>'+food+'</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                           	'<td>Wood</td><td>'+wood+'</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                          	'<td>Gold</td><td>'+gold+'</td>'+
                                        '</tr>'+
										'<tr>'+
                                        	'<td>Time</td><td>'+build_time+'</td>'+
                                        '</tr>'+
                                    '</table>'+
                                    '<p class="text-center"><button onclick="orderbuilding(\''+building+'\')" type="button" class="btn btn-primary" id="build-'+building+'-button">Build</button></p>'+
                                '</div>'+
                            '</div>'+
                         '</div>');
					
				})
				
			}
			
		var village_troop_build_schedules = new EventSource("<?php echo base_url()."play/village_troop_build_schedules" ?>");
		village_troop_build_schedules.onmessage = function(event){
			
				$("#village-troop-build-schedules").html("<tr><th class='text-center'>#</th><th class='text-center'>timespan</th><th class='text-center'><span class='glyphicon glyphicon-user'></span></th></tr>");
				var village_troop_build_schedules_data = $.parseJSON(event.data);
				$.each(village_troop_build_schedules_data,function(index){
					var time_span = village_troop_build_schedules_data[index].time_span;
					var village_troop = village_troop_build_schedules_data[index].troop;
					var number = index + 1;			
					$("#village-troop-build-schedules").append("<tr><td>"+number+".</td><td>"+time_span+"</td><td>"+village_troop+"</td></tr>");
				})
		
			}
		
		var troop_stats = new EventSource("<?php echo base_url()."play/troop_stats" ?>");
		troop_stats.onmessage = function(event){
			
				$("#troop-stats").html("<tr><th class='text-center'>#</th><th class='text-center'>troop</th><th class='text-center'>attack point</th><th class='text-center'>defense point</th><th class='text-center'>speed</th><th class='text-center'>carrying capacity</th></tr>");
				var troop_stats_data = $.parseJSON(event.data);
				$.each(troop_stats_data,function(index){					
					var troop = troop_stats_data[index].troop;
					var attack_point = troop_stats_data[index].attack_point;
					var defense_point = troop_stats_data[index].defense_point;
					var carrying_capacity = troop_stats_data[index].carrying_capacity;
					var troop_speed = troop_stats_data[index].troop_speed;
					var number = index + 1;			
					$("#troop-stats").append("<tr><td>"+number+".</td><td>"+troop+"</td><td>"+attack_point+"</td><td>"+defense_point+"</td><td>"+troop_speed+"</td><td>"+carrying_capacity+"</td></tr>");
				})
		
			}
			
			
		var troop_prices = new EventSource("<?php echo base_url()."play/troop_prices" ?>");
		troop_prices.onmessage = function(event){
			
				$("#troop-prices").html("");
				var troop_prices_data = $.parseJSON(event.data);
				$.each(troop_prices_data,function(index){
					var troop = troop_prices_data[index].troop;
					var food = troop_prices_data[index].food;
					var wood = troop_prices_data[index].wood;
					var gold = troop_prices_data[index].gold;
					var build_time = troop_prices_data[index].build_time;
					
					$("#troop-prices").append(
						'<div class="col-md-6">'+
                         	'<div class="panel panel-info">'+
								'<div class="panel-heading"><strong>'+troop+'</strong></div>'+
                            	'<div class="panel-body">'+
                                    '<table class="table table-striped">'+                                    	
                                        '<tr>'+
                                        	'<td>Food</td><td>'+food+'</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                           	'<td>Wood</td><td>'+wood+'</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                          	'<td>Gold</td><td>'+gold+'</td>'+
                                        '</tr>'+
										'<tr>'+
                                        	'<td>Time</td><td>'+build_time+'</td>'+
                                        '</tr>'+
                                    '</table>'+
                                    '<p class="text-center"><button onclick="ordertroop(\''+troop+'\')" type="button" class="btn btn-success" id="build-'+troop+'-button">Build</button></p>'+
                                '</div>'+
                            '</div>'+
                         '</div>');
					
				})
				
			}
			
		var village_ranking = new EventSource("<?php echo base_url()."play/village_ranking" ?>");
		village_ranking.onmessage = function(event){
				var village_ranking_data = $.parseJSON(event.data);
				var player = village_ranking_data[0].player;
				var rank = village_ranking_data[0].rank;
				var point = village_ranking_data[0].point;
				$("#player").html(player);
				$("#ranking").html(rank);
				$("#point").html(point);				
			}
			
		var villages_rankings = new EventSource("<?php echo base_url()."play/villages_rankings" ?>");
		villages_rankings.onmessage = function(event){
			
				$("#villages-rankings").html("<tr><th class='text-center'>rank</th><th class='text-center'>player</th><th class='text-center'>village name</th><th class='text-center'>points</th></tr>");
				var villages_rankings_data = $.parseJSON(event.data);
				$.each(villages_rankings_data,function(index){
					var player = villages_rankings_data[index].player;
					var village_name = villages_rankings_data[index].village_name;
					var point = villages_rankings_data[index].point;
					var rank = villages_rankings_data[index].rank;			
					$("#villages-rankings").append("<tr><td>"+rank+".</td><td>"+player+"</td><td>"+village_name+"</td><td>"+point+"</td></tr>");
				})
		
			}
			
		var villages_locations = new EventSource("<?php echo base_url()."play/villages_locations" ?>");
		villages_locations.onmessage = function(event){
			
				$("#villages-locations").html("<tr><th class='text-center'>#</th><th class='text-center'>village name</th><th class='text-center'><span class='glyphicon glyphicon-cutlery'></span></th><th class='text-center'><span class='glyphicon glyphicon-tower'></span></th></tr>");
				var villages_locations_data = $.parseJSON(event.data);
				var number = 0;
				$.each(villages_locations_data,function(index){
					number = number + 1;
					var village_name = villages_locations_data[index].village_name;
					var kris_swordman = villages_locations_data[index].kris_swordman;
					var bhayangkara = villages_locations_data[index].bhayangkara;			
					$("#villages-locations").append("<tr><td>"+number+".</td><td>"+village_name+"</td><td>"+kris_swordman+"</td><td>"+bhayangkara+"</td></tr>");
				})
		
			}
		

		
		var farm_amounts = new EventSource("<?php echo base_url()."play/farm_amounts" ?>");
		farm_amounts.onmessage = function(event){
				var farm_amounts_data = $.parseJSON(event.data);
				var amounts = farm_amounts_data[0].amount;
				$("#farm-amounts").html(amounts);				
			}
		
		var lumber_camp_amounts = new EventSource("<?php echo base_url()."play/lumber_camp_amounts" ?>");
		lumber_camp_amounts.onmessage = function(event){
				var lumber_camp_amounts_data = $.parseJSON(event.data);
				var amounts = lumber_camp_amounts_data[0].amount;
				$("#lumber-camp-amounts").html(amounts);				
			}
		
		var mining_camp_amounts = new EventSource("<?php echo base_url()."play/mining_camp_amounts" ?>");
		mining_camp_amounts.onmessage = function(event){
				var mining_camp_amounts_data = $.parseJSON(event.data);
				var amounts = mining_camp_amounts_data[0].amount;
				$("#mining-camp-amounts").html(amounts);				
			}
			
		var troop_attack_amounts = new EventSource("<?php echo base_url()."play/count_troop_attack_schedules" ?>");
		troop_attack_amounts.onmessage = function(event){
				var troop_attack_amounts_data = $.parseJSON(event.data);
				var amounts = troop_attack_amounts_data[0].amount;
				$("#troop-attack-amounts").html(amounts);				
			}
			
		var troop_back_amounts = new EventSource("<?php echo base_url()."play/count_troop_back_schedules" ?>");
		troop_back_amounts.onmessage = function(event){
				var troop_back_amounts_data = $.parseJSON(event.data);
				var amounts = troop_back_amounts_data[0].amount;
				$("#troop-back-amounts").html(amounts);				
			}
			
		var war_loot_amounts = new EventSource("<?php echo base_url()."play/count_war_loot_schedules" ?>");
		war_loot_amounts.onmessage = function(event){
				var war_loot_amounts_data = $.parseJSON(event.data);
				var amounts = war_loot_amounts_data[0].amount;
				$("#war-loot-amounts").html(amounts);				
			}
		
		var enemy_attack_amounts = new EventSource("<?php echo base_url()."play/count_enemy_attack_schedules" ?>");
		enemy_attack_amounts.onmessage = function(event){
				var enemy_attack_amounts_data = $.parseJSON(event.data);
				var amounts = enemy_attack_amounts_data[0].amount;
				$("#enemy-attack-amounts").html(amounts);				
			}
		
		var build_schedule_amounts = new EventSource("<?php echo base_url()."play/count_village_building_build_schedules" ?>");
		build_schedule_amounts.onmessage = function(event){
				var build_schedule_amounts_data = $.parseJSON(event.data);
				var amounts = build_schedule_amounts_data[0].amount;
				$("#build-schedule-amounts").html(amounts);				
			}
			
		var trainee_schedule_amounts = new EventSource("<?php echo base_url()."play/count_village_troop_build_schedules" ?>");
		trainee_schedule_amounts.onmessage = function(event){
				var trainee_schedule_amounts_data = $.parseJSON(event.data);
				var amounts = trainee_schedule_amounts_data[0].amount;
				$("#trainee-schedule-amounts").html(amounts);				
			}
	</script>
  </body>
</html>
