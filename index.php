<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Diamond Trading</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<!--jquery ui-->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>


</head>

<body>

<div class="fullScreenMask">
	<div align="center" class="width100p">
    	<img src="images/ajax-loader.gif" height="31" width="31" style="margin-top:25%;" />
    </div>
</div>

<div class="dimBookFormCon"></div>

<div class="width100p" id="con_filter" show_state="open" style="margin-top:-385px; padding-top:10px; background:#000000; color:#FFFFFF; border-bottom:5px solid #0099FF; position:relative;">
	<div class="center">
    	<div style="float:left; width:100%; position:relative;">
            <div class="width100p" style="padding-bottom:3px; border-bottom:1px dashed #CCCCCC; margin-bottom:5px;">
                <div style="float:left; font-size:16px; ">FILTER DATA</div>
                <div id="resetAll" style="float:right; color:#FFFFFF; cursor:pointer;">RESET</div>
            </div>
            <div class="width100p">
                <ul class="filterList">
                	<div class="width100p">
<!---------------------------CARAT FILTER START-------------------------------->
                        <li>
                            <fieldset>
                                <legend>CARAT</legend>
                                <div class="width100p"><div style="width:95%;" id="slider_carat"></div></div>
                                <div class="width100p" style="padding-top:5px;">
                                    <input type="text" id="carat_min" value="0.01" style="float:left; width:40%; margin:0;" />
                                    <input type="text" id="carat_max" value="24.00" style="float:right; width:40%; margin:0;"/>
                                </div>
                            </fieldset>
                        </li>
<!---------------------------CARAT FILTER END-------------------------------->
<!---------------------------PRICE FILTER START-------------------------------->
                        <li>
                            <fieldset>
                                <legend>PRICE</legend>
                                <div class="width100p"><div style="width:95%;" id="slider_price"></div></div>
                                <div class="width100p" style="padding-top:5px;">
                                    <input type="text" id="price_min" value="0" style="float:left; width:40%; margin:0;" />
                                    <input type="text" id="price_max" value="100000" style="float:right; width:40%; margin:0;"/>
                                </div>
                            </fieldset>
                        </li>
<!---------------------------PRICE FILTER END-------------------------------->
<!---------------------------DEPTH FILTER START-------------------------------->
                        <li>
                            <fieldset>
                                <legend>DEPTH</legend>
                                <div class="width100p"><div style="width:95%;" id="slider_depth"></div></div>
                                <div class="width100p" style="padding-top:5px;">
                                    <input type="text" id="dep_min" value="0" style="float:left; width:40%; margin:0;" />
                                    <span style="float:left;">%</span>
                                    
                                    <span style="float:right;">%</span>
                                    <input type="text" id="dep_max" value="100" style="float:right; width:40%; margin:0;"/>
                                </div>
                            </fieldset>
                        </li>
<!---------------------------DEPTH FILTER END-------------------------------->
<!---------------------------TABLE FILTER START-------------------------------->
                        <li>
                            <fieldset>
                                <legend>TABLE</legend>
                                <div class="width100p"><div style="width:95%;" id="slider_table"></div></div>
                                <div class="width100p" style="padding-top:5px;">
                                    <input type="text" id="table_min" value="0" style="float:left; width:40%; margin:0;" />
                                    <span style="float:left;">%</span>
                                    
                                    <span style="float:right;">%</span>
                                    <input type="text" id="table_max" value="100" style="float:right; width:40%; margin:0;"/>
                                </div>
                            </fieldset>
                        </li>
<!---------------------------TABLE FILTER END-------------------------------->
<!---------------------------LENGHT/DEPTH RATIO FILTER START-------------------------------->
                        <li>
                            <fieldset>
                                <legend>LENGHT/DEPTH RATIO</legend>
                                <div class="width100p"><div style="width:95%;" id="ldr_table"></div></div>
                                <div class="width100p" style="padding-top:5px;">
                                    <input type="text" id="ldr_min" value="0.1" style="float:left; width:40%; margin:0;" />
                                    <input type="text" id="ldr_max" value="5" style="float:right; width:40%; margin:0;"/>
                                </div>
                            </fieldset>
                        </li>
<!---------------------------LENGHT/DEPTH RATIO FILTER END-------------------------------->
                    </div>
                    <div class="width100p">
<!---------------------------CUT FILTER START-------------------------------->
                    	<li style="width:300px;">
                            <fieldset>
                                <legend>CUT</legend>
                                <div style="float:left; width:100%; position:relative;">
                                    <div style="float:left; width:100%;">
                                        <div id="slider_cut"></div>
                                    </div>
                                    <div style="float:left; width:100%;">
                                        <div style="float:left; width:25%; text-align:center; border-right:1px solid #999999;">
                                            fair
                                        </div>
                                        <div style="float:left; width:24%; text-align:center; border-right:1px solid #999999;">
                                            good
                                        </div>
                                        <div style="float:left; width:25%; text-align:center; border-right:1px solid #999999;">
                                            very good
                                        </div>
                                        <div style="float:left; width:24%; text-align:center; border-right:1px solid #999999;">
                                            exelent
                                        </div>
                                        
                                    </div>
                                </div>
                            </fieldset>
                            <input type="hidden" id="cut_min" value="0" /><input type="hidden" id="cut_max" value="4"/>
                        </li>
<!---------------------------CLARITY FILTER START-------------------------------->
                        <li style="width:350px;">
                            <fieldset>
                                <legend>CLARITY</legend>
                                <div style="float:left; width:100%; position:relative;">
                                    <div style="float:left; width:100%;">
                                        <div id="slider_cla"></div>
                                    </div>
                                    <div style="float:left; width:100%;">
                                        <div style="float:left; width:13%; text-align:center; border-right:1px solid #999999;">
                                            SI2
                                        </div>
                                        <div style="float:left; width:12%; text-align:center; border-right:1px solid #999999;">
                                            SI1
                                        </div>
                                        <div style="float:left; width:12%; text-align:center; border-right:1px solid #999999;">
                                            VS2
                                        </div>
                                        <div style="float:left; width:12%; text-align:center; border-right:1px solid #999999;">
                                            VS1
                                        </div>
                                        <div style="float:left; width:12%; text-align:center; border-right:1px solid #999999;">
                                            VVS2
                                        </div>
                                        <div style="float:left; width:12%; text-align:center; border-right:1px solid #999999;">
                                            VVS1
                                        </div>
                                        <div style="float:left; width:12%; text-align:center; border-right:1px solid #999999;">
                                            IF
                                        </div>
                                        <div style="float:left; width:12%; text-align:center; border-right:1px solid #999999;">
                                            FL
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <input type="hidden" id="cut_min" value="0" /><input type="hidden" id="cut_max" value="4"/>
                        </li>
<!---------------------------CLARITY FILTER END-------------------------------->
<!---------------------------POLISH FILTER START-------------------------------->
                        <li style="width:299px;">
                            <fieldset>
                                <legend>POLISH</legend>
                                <div style="float:left; width:100%; position:relative;">
                                    <div style="float:left; width:100%;">
                                        <div id="slider_polish"></div>
                                    </div>
                                    <div style="float:left; width:100%;">
                                        <div style="float:left; width:25%; text-align:center; border-right:1px solid #999999;">
                                            F-G
                                        </div>
                                        <div style="float:left; width:25%; text-align:center; border-right:1px solid #999999;">
                                            G-VG
                                        </div>
                                        <div style="float:left; width:25%; text-align:center; border-right:1px solid #999999;">
                                            VG-EX
                                        </div>
                                        <div style="float:left; width:23.5%; text-align:center; border-right:1px solid #999999;">
                                            EX-ID
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <input type="hidden" id="polish_min" value="0" /><input type="hidden" id="polish_max" value="4"/>
                        </li>
<!---------------------------POLISH FILTER END-------------------------------->
                    </div>
                    <div class="width100p">
<!---------------------------FLOUROCENSE FILTER START-------------------------------->
                        <li style="width:400px;">
                            <fieldset>
                                <legend>FLUORESCENCE</legend>
                                <div style="float:left; width:100%; position:relative;">
                                    <div style="float:left; width:100%;">
                                        <div id="slider_flu"></div>
                                    </div>
                                    <div style="float:left; width:100%;">
                                        <div style="float:left; width:20%; text-align:center; border-right:1px solid #999999;">
                                            Very Strong
                                        </div>
                                        <div style="float:left; width:20%; text-align:center; border-right:1px solid #999999;">
                                            Strong
                                        </div>
                                        <div style="float:left; width:20%; text-align:center; border-right:1px solid #999999;">
                                            Medium
                                        </div>
                                        <div style="float:left; width:19%; text-align:center; border-right:1px solid #999999;">
                                            Faint
                                        </div>
                                        <div style="float:left; width:19.5%; text-align:center; border-right:1px solid #999999;">
                                            None/Negb.
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <input type="hidden" id="flu_min" value="0" /><input type="hidden" id="flu_max" value="4"/>
                        </li>
<!---------------------------FLOUROCENSE FILTER END-------------------------------->
<!---------------------------SYMMETRY FILTER START-------------------------------->
                        <li style="width:400px;">
                            <fieldset>
                                <legend>SYMMETRY</legend>
                                <div style="float:left; width:100%; position:relative;">
                                    <div style="float:left; width:100%;">
                                        <div id="slider_sym"></div>
                                    </div>
                                    <div style="float:left; width:100%;">
                                        <div style="float:left; width:25%; text-align:center; border-right:1px solid #999999;">
                                            F-G
                                        </div>
                                        <div style="float:left; width:25%; text-align:center; border-right:1px solid #999999;">
                                            G-VG
                                        </div>
                                        <div style="float:left; width:25%; text-align:center; border-right:1px solid #999999;">
                                            VG-EX
                                        </div>
                                        <div style="float:left; width:23%; text-align:center; border-right:1px solid #999999;">
                                            EX-ID
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <input type="hidden" id="sym_min" value="0" /><input type="hidden" id="sym_max" value="4"/>
                        </li>
<!---------------------------SYMMETRY FILTER END-------------------------------->
<!---------------------------SEALED FILTER START-------------------------------->
                        <li style="width:149px;">
                            <fieldset>
                                <legend>SEALED</legend>
                                <div style="float:left; width:100%; position:relative;">
                                    <div style="float:left; width:100%;">
                                        <div id="sealed_slider"></div>
                                    </div>
                                    <div style="float:left; width:100%;">
                                        <div style="float:left; width:49%; text-align:center; border-right:1px solid #999999;">
                                            YES
                                        </div>
                                        <div style="float:left; width:49%; text-align:center; border-right:1px solid #999999;">
                                            NO
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <input type="hidden" id="sealed_min" value="0" /><input type="hidden" id="sealed_max" value="4"/>
                        </li>
<!---------------------------SEALED FILTER END-------------------------------->
                    </div>
                    <div class="width100p">
<!---------------------------SWITCH BUTTON START-------------------------------->                      
						<li>
                            <div class="width100p" style="padding-bottom:10px;">
                                Diamond Colour Catagory
                            </div>
                            <div id="switchButtonCon" style="float:left; width:100%; height:30px; border:1px solid #333333; position:relative; margin-bottom:17px;">
                                <div id="switchButtonOpt1"  style="float:left; width:50%; line-height:30px; text-align:center; cursor:pointer;">
                                    White(D-J)
                                </div>
                                <div id="switchButtonOpt2"  style="float:left; width:50%; line-height:30px; text-align:center; cursor:pointer;">
                                    Fancy
                                </div>
                                <div id="switchButton"  style="width:50%; height:30px; position:absolute; left:50%; background:#333333;"></div>
                                <input id="switchButtonVal" type="hidden" value="whitedtoj" />
                            </div>
                        </li>
<!---------------------------SWITCH BUTTON END-------------------------------->      
<!---------------------------FANCY/WHITE COLOR FILTER START-------------------------------->                    
                    	<li style="width:300px;">
                        	<div id="fancyColorSlider" class="width100p">
                            	<div class="width100p">
                                <select id="fan_col_group">
                                    <option value="">All</option>
                                    <option value="yellow">Yellow</option>
                                    <option value="brown">Brown</option>
                                </select>
                            </div>
                                <div class="width100p">
                                    <fieldset>
                                        <legend>FANCY COLOR</legend>
                                        <div style="float:left; width:100%; position:relative;">
                                            <div style="float:left; width:100%;">
                                                <div id="slider_fancyColor"></div>
                                            </div>
                                            <div style="float:left; width:100%;">
                                                <div style="float:left; width:16.8%; text-align:center; border-right:1px solid #999999;">
                                                    faint
                                                </div>
                                                <div style="float:left; width:16.5%; text-align:center; border-right:1px solid #999999;">
                                                    light
                                                </div>
                                                <div style="float:left; width:16.0%; text-align:center; border-right:1px solid #999999;">
                                                    fancy
                                                </div>
                                                <div style="float:left; width:16.0%; text-align:center; border-right:1px solid #999999;">
                                                    intence
                                                </div>
                                                <div style="float:left; width:16.0%; text-align:center; border-right:1px solid #999999;">
                                                    vivid
                                                </div>
                                                <div style="float:left; width:16.0%; text-align:center; border-right:1px solid #999999;">
                                                    deep
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                </div>
                            	<input type="hidden" id="fanCol_min" value="0" /><input type="hidden" id="fanCol_max" value="6"/>
                            </div>
                            <div id="whiteColorSlider" class="width100p" style="display:none;">
                            	<div class="width100p">
                                <fieldset>
                                    <legend>COLOR</legend>
                                    <div style="float:left; width:100%; position:relative;">
                                        <div style="float:left; width:100%;">
                                            <div id="slider_Color"></div>
                                        </div>
                                        <div style="float:left; width:100%; padding-bottom:18px;">
                                            <div style="float:left; width:14.5%; text-align:center; border-right:1px solid #999999;">
                                                J
                                            </div>
                                            <div style="float:left; width:14%; text-align:center; border-right:1px solid #999999;">
                                                I
                                            </div>
                                            <div style="float:left; width:14%; text-align:center; border-right:1px solid #999999;">
                                                H
                                            </div>
                                            <div style="float:left; width:14%; text-align:center; border-right:1px solid #999999;">
                                                G
                                            </div>
                                            <div style="float:left; width:14%; text-align:center; border-right:1px solid #999999;">
                                                F
                                            </div>
                                            <div style="float:left; width:14%; text-align:center; border-right:1px solid #999999;">
                                                E
                                            </div>
                                            <div style="float:left; width:12%; text-align:center; border-right:1px solid #999999;">
                                                D
                                            </div>
                                        </div>
                                    </div>
                                    
                                </fieldset>
                            </div>
                            	<input type="hidden" id="whiteCol_min" value="0" /><input type="hidden" id="whiteCol_max" value="7"/>
                            </div>
                        </li>
<!---------------------------FANCY/WHITE COLOR FILTER END-------------------------------->

<!---------------------------DIM ID CERT NO FILTER START-------------------------------->                    
                    	<li style="width:250px;">
                        	<div class="width100p" style="padding-bottom:10px;">
                            	DIAMOND ID CERTIFICATE NO
                            </div>
                            <div class="width100p" style="padding-bottom:33px;">
                                <input type="text" />
                            </div>
                        </li>
<!---------------------------DIM ID CERT NO FILTER END-------------------------------->
<!---------------------------DIM SHAPE FILTER START-------------------------------->                    
                    	<li style="width:199px;">
                        	<div class="width100p" style="padding-bottom:10px;">
                            	DIAMOND SHAPE
                            </div>
                            <div class="width100p" style="padding-bottom:19px;">
                                <div style="float:left; margin-top:1px;">
                                    <input name="dimShapeFilter" type="radio" id="" /> 
                                </div>
                                <div style="float:left; margin-left:3px;">
                                    <label for="filr">Heart</label>
                                </div>
                                <div style="float:left; margin-right:5px;">
                                    ,
                                </div>
                                <div style="float:left; margin-top:1px;">
                                    <input name="dimShapeFilter" type="radio" id="" /> 
                                </div>
                                <div style="float:left; margin-left:3px;">
                                    <label for="filr">Cushion</label>
                                </div>
                                <div style="float:left; margin-right:5px;">
                                    ,
                                </div>
                                <div style="float:left; margin-top:1px;">
                                    <input name="dimShapeFilter" type="radio" id="" /> 
                                </div>
                                <div style="float:left; margin-left:3px;">
                                    <label for="filr">Pear</label>
                                </div>
                                <div style="float:left; margin-right:5px;">
                                    ,
                                </div>
                                <div style="float:left; margin-top:1px;">
                                    <input name="dimShapeFilter" type="radio" id="" /> 
                                </div>
                                <div style="float:left; margin-left:3px;">
                                    <label for="filr">Radiant</label>
                                </div>
                                <div style="float:left; margin-right:5px;">
                                    ,
                                </div>
                                <div style="float:left; margin-top:1px;">
                                    <input name="dimShapeFilter" type="radio" id="" /> 
                                </div>
                                <div style="float:left; margin-left:3px;">
                                    <label for="dim_shape_ovel">Oval</label>
                                </div>
                                
                            </div>
                        </li>
<!---------------------------DIM SHAPE FILTER END-------------------------------->
                    </div>
                 </ul>
            </div>
            
            <div style="font-size:16px; font-size:11px; width:100%; float:left; width:100%; margin-top:5px; padding-bottom:5px; border-top:1px dashed #CCCCCC; padding-top:5px;">
            	<div style="float:left; margin-right:5px;">
                	Hide These Filters : 
                </div>
                <div style="float:left;">
                	<input type="checkbox" id="filt1" /> 
                </div>
                <div style="float:left;">
                	<label for="filr">Depth</label>
                </div>
                <div style="float:left; margin-right:5px;">
                	,
                </div>
                <div style="float:left;">
                	<input type="checkbox" id="filt1" /> 
                </div>
                <div style="float:left;">
                	<label for="filr">Polish</label>
                </div>
                <div style="float:left; margin-right:5px;">
                	,
                </div>
                <div style="float:left;">
                	<input type="checkbox" id="filt1" /> 
                </div>
                <div style="float:left;">
                	<label for="filr">Fluorescence</label>
                </div>
                <div style="float:left; margin-right:5px;">
                	,
                </div>
                <div style="float:left;">
                	<input type="checkbox" id="filt1" /> 
                </div>
                <div style="float:left;">
                	<label for="filr">Symetry</label>
                </div>
                <div style="float:left; margin-right:5px;">
                	,
                </div>
                <div style="float:left;">
                	<input type="checkbox" id="filt1" /> 
                </div>
                <div style="float:left;">
                	<label for="filr">Table</label>
                </div>
                <div style="float:left; margin-right:5px;">
                	,
                </div>
                <div style="float:left;">
                	<input type="checkbox" id="filt1" /> 
                </div>
                <div style="float:left;">
                	<label for="filr">Lenth/Depth Ratio</label>
                </div>
                <div style="float:left; margin-right:5px;">
                	,
                </div>
                <div style="float:left;">
                	<input type="checkbox" id="filt1" /> 
                </div>
                <div style="float:left;">
                	<label for="filr">Sealed</label>
                </div>
                <div style="float:left; margin-right:5px;">
                	,
                </div>
                <div style="float:left;">
                	<input type="checkbox" id="filt1" /> 
                </div>
                <div style="float:left;">
                	<label for="filr">Diamond id/ Certificate No.</label>
                </div>
            </div>
        </div>
    </div>
    <div id="filter_opner" style="position:absolute; bottom:-30px; line-height:30px; background:#0099FF; padding-left:5px; padding-right:5px; cursor:pointer;">FILTERS</div>
</div>

<div class="width100p">
	<div class="center">
    	<div class="width100p">
        	<div class="width100p" style="font-size:22px; font-family:'Times New Roman', Times, serif; padding-bottom:50px; padding-top:50px; border-bottom:1px dotted #666666;">
            	Diamond Treading
            </div>
            
            <div class="width100p" style="height:700px;">
            	<div style="float:left; width:794px; border-right:1px dotted #666666; padding:5px; padding-left:0;">
					<div class="width100p">
                        <div class="datagrid_header_con">
                            <div class="datagrid_cell">
                                <div class="datagrid_cellLable" style="cursor:default;">Favourite</div> 
                            </div>
                            <div class="datagrid_cell">
                                <div id="diamond_shape" class="datagrid_cellLable">Shape</div> 
                            </div>
                            <div class="datagrid_cell">
                                <div id="diamond_carat" class="datagrid_cellLable">Carat</div> 
                            </div>
                            <div class="datagrid_cell">
                                <div id="diamond_cut" class="datagrid_cellLable">Cut</div> 
                            </div>
                            <div class="datagrid_cell">
                                <div id="diam_color" class="datagrid_cellLable">Colour</div>
                            </div>
                            <div class="datagrid_cell">
                                <div id="diamond_clarity" class="datagrid_cellLable">Clarity</div>
                            </div>
                            <div class="datagrid_cell">
                                <div id="diamond_sym" class="datagrid_cellLable">Symmetry</div>
                            </div>
                            <div class="datagrid_cell">
                                <div class="datagrid_cellLable" style="cursor:default;">£/Carat</div>
                            </div>
                            <div class="datagrid_cell">
                                <div class="datagrid_cellLable" style="cursor:default;">Details</div>
                            </div>
                            <div class="datagrid_cell">
                                <div id="diamond_sell_price" class="datagrid_cellLable">Sell Price</div> 
                            </div>
                        </div>
                    </div>
                    <div class="datagrid_scrolling_con">
                        <div class="datagrid_row"></div>
                        <div class="datagrid_mask">
                            <div class="datagrid_loadImgCon"><img src="images/ajax-loader.gif" height="31" width="31" /></div>
                        </div>
                    </div>
              <div class="width100p">
                        <ul class="pagerLink"></ul>
                    </div>
                </div>
                <div style="float:left; width:195px; padding:5px; padding-right:0;">
                	<input id="sortOrder" type="hidden" value="DESC" />
        			<input id="sortField" type="hidden" value="diamond_sell_price" />
                    <div class="width100p" style="background:#ddd;">
                    	<div class="headerLable">
                        	Diamond Detail
                        </div>
                        <div class="width100p" id="diamondDetailCon">
							<div style="float:left; width:95%; padding:5%;">
                                Please select a Diamond to view detail
                            </div>
                            <div class="diamondMask">
                                <img src="images/ajax-loader.gif" height="31" width="31"  />
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="width100p">
	<div class="center">
    	<div class="width100p" style="line-height:25px; border-top:1px dotted #666666;">
        	footer
        </div>
    </div>
</div>
</body>

</body>
</html>
<script src="js/diamond.js" type="text/javascript"></script>
