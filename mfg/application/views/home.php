<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="../../assets/ico/favicon.ico"> -->

    <title>MFG Engine</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()."assets/css/"; ?>bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url()."assets/css/"; ?>bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/"; ?>jquery-ui-1.10.4.custom.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()."assets/css/"; ?>theme.css" rel="stylesheet">    
  
  </head>

  <body role="document" data-spy="scroll" data-target=".navigation-spy">   
    
    <div class="container">
    	<div class="spacer"></div>
    	<div class="row">
        	<div class="col-md-3">
            	<blockquote class="blockquote-reverse">
                	<h3>MFG Engine Cheat Sheet</h3>
                    <footer>Complete guide to using MFG Engine</footer>
            	</blockquote>
                <ul class="list-group">
                	<li class="list-group-item">                    	
                        <p>All <strong class="text-warning">input</strong> should be using <strong class="text-danger">HTTP POST</strong> method</p>
                    </li>
                    <li class="list-group-item">                   	
                        <p>All <strong class="text-success">output</strong> will be in JSON format</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
            	<div class="panel panel-default">
                    <div class="panel-body">
                    	<blockquote>
                        	<h4 class="text-muted">form_validation Class</h4>
                            <footer>Function List</footer>
                        </blockquote>
                        <p>                        
                        	<strong>username_availability</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>username</td>
                            </tr>
                            <tr>
                            	<td>output</td><td>availability</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>[{"availability":"no"}]</td>
                            </tr>
                        </table></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            	<div class="panel panel-default">
                    <div class="panel-body">
                    	<blockquote>
                        	<h4 class="text-muted">log_in Class</h4>
                            <footer>Function List</footer>
                        </blockquote>
                        <p>                        
                        	<strong>player_log_in</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>username<br>password</td>
                            </tr>
                            <tr>
                            	<td>output</td><td>status</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>[{"status":"success"}]</td>
                            </tr>
                        </table></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            	<div class="panel panel-default">
                    <div class="panel-body">
                    	<blockquote>
                        	<h4 class="text-muted">sign_up Class</h4>
                            <footer>Function List</footer>
                        </blockquote>
                        <p>                        
                        	<strong>player_sign_up</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>username<br>password</td>
                            </tr>
                            <tr>
                            	<td>output</td><td>status</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>[{"status":"error"}]</td>
                            </tr>
                        </table></div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
        	<div class="col-md-3">
            	<div class="panel panel-warning">
                    <div class="panel-body">
                    	<blockquote>
                        	<h4 class="text-warning">villages Class</h4>
                            <footer>Function List</footer>
                        </blockquote>
                        <p>                        
                        	<strong>player_default_active_village</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>username</td>
                            </tr>
                            <tr>
                            	<td>output</td><td>idvillage</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>[{"idvillage":"2"}]</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_village_ranking</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>
                                rank<br> 
                                village<br> 
                                player<br>
                                village_name<br> 
                                point
                                </td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>[{"rank":"1","village":"2",...]</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_villages_rankings</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>-</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>
                                rank<br> 
                                village<br> 
                                player<br>
                                village_name<br> 
                                point</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>[{"rank":"1","village":"2",...]</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_villages_locations</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>
                                village<br> 
                                village_name<br> 
                                x_axis<br>
                                y_axis<br> 
                                kris_swordman (travel time)<br>
								bhayangkara (travel time)</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>[{"village":"1","village_n...]</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_village_location</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>idvillage, target_village</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>
                                village<br> 
                                village_name<br> 
                                x_axis<br>
                                y_axis<br> 
                                kris_swordman (travel time)<br>
								bhayangkara (travel time)</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>[{"village":"1","village_n...]</td>
                            </tr>
                        </table></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            	<div class="panel panel-success">
                    <div class="panel-body">
                    	<blockquote>
                        	<h4 class="text-success">resources Class</h4>
                            <footer>Function List</footer>
                        </blockquote>
                        <p>                        
                        	<strong>player_village_resources</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>
                                	village<br>
									village_name<br>
									food<br>
									wood<br>
									gold
                                </td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>[{"village":"2","village_n...]</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_village_resource_<br>
							schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td>
                                <td>
                                	idvillage<br>
									resource_type<br>
									limit
                                </td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>
                                idvas<br> 
                                player<br> 
                                village<br>
                                village_name<br> 
                                village_building<br>
								building<br>
								attribute<br>
								value<br>
								execution_time<br>
								time_span<br>
								interlude_dv<br>
								iteration_vv
                                </td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>[{"idvas":"52","player":"2"...]</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_war_loot_schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>
                                idwls<br>
								village<br>
								attribute<br>
								value<br>
								execution_time<br>
								time_span<br>
								status</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_count_war_loot_schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>amount</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            	<div class="panel panel-info">
                    <div class="panel-body">
                    	<blockquote>
                        	<h4 class="text-primary">buildings Class</h4>
                            <footer>Function List</footer>
                        </blockquote>
                        <p>                        
                        	<strong>player_village_building_amounts</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td>
                                <td>idvillage<br>
								building
                                </td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>
                                	amount
                                </td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_building_prices</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td>
                                <td>
                                	-
                                </td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>
                                idb<br>
									building<br>
									food<br>
									wood<br>
									gold<br>
									build_time
                                </td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_village_building_build_<br>
							schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>
                                idvbbs<br>
								village<br>
								village_name<br>
								building<br>
								finished<br>
								time_span<br>
								status_vv 
                                </td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_count_village_building_<br>
							build_schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>amount</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_order_building</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td>
                                <td>idvillage<br>
								building</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>-</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            	<div class="panel panel-danger">
                    <div class="panel-body">
                    	<blockquote>
                        	<h4 class="text-danger">troops Class</h4>
                            <footer>Function List</footer>
                        </blockquote>
                        <p>                        
                        	<strong>player_troop_attack_schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td>
                                <td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>attack<br>
								village<br>
								village_name<br>
								target_village<br>
								target_village_name<br>
								kris_swordman<br>
								bhayangkara<br>
								execution_time<br>
								time_span<br>
								status</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_count_troop_attack_<br>
							schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td>
                                <td>
                                	idvillage
                                </td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>amount
                                </td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_enemy_attack_schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td>
                                <td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>attack<br>
								village<br>
								village_name<br>
								target_village<br>
								target_village_name<br>
								kris_swordman<br>
								bhayangkara<br>
								execution_time<br>
								time_span<br>
								status</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_count_enemy_attack_<br>
							schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td>
                                <td>
                                	idvillage
                                </td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>amount
                                </td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_troop_back_schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>
								village<br>
								troop<br>
								amount<br>
								finished<br>
								time_span<br>
								status 
                                </td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_count_troop_back_
                            schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>amount</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_troop_prices</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td>
                                <td>-</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>idt<br>
								troop<br>
								food<br>
								wood<br>
								gold<br>
								build_time</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_troop_stats</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td>
                                <td>-</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>idt<br>
								troop<br>
								attack_point<br>
								defense_point<br>
								carrying_capacity<br>
								troop_speed</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_village_troop_build_<br>
							schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>
								village<br>
								troop<br>
								amount<br>
								finished<br>
								time_span<br>
								status 
                                </td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_count_village_troop_<br>
							build_schedules</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td><td>idvillage</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>amount</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_order_troop</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td>
                                <td>idvillage<br>
								troop</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>-</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                        <p>                        
                        	<strong>player_order_atack</strong>                            
                        </p>
                        <div class="table-responsive"><table class="table table-striped table-hover">
                        	<tr>
                        		<td>input</td>
                                <td>idvillage<br>
								troop
								( format : troop_name#amount&amp;troop
								_name#amount...)<br>
								target_village</td>
                            </tr>
                            <tr>
                            	<td>output</td>
                                <td>-</td>
                            </tr>
                            <tr>
                            	<td><em>ex</em></td><td>-</td>
                            </tr>
                        </table></div>
                    </div>
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
    
  </body>
</html>
