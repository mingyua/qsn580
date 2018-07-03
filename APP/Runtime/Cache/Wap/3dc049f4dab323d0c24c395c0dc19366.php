<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<title><?php echo ($site["site_title"]); ?></title>
	<script src="__WAP__/js/mui.min.js"></script>
	<link href="__WAP__/css/mui.min.css" rel="stylesheet" />
	<link href="__WAP__/css/style.css" rel="stylesheet" />
	<meta name="Keywords" content="<?php echo ($site["seo_keywords"]); ?>" />
	<meta name="Description" content="<?php echo ($site["seo_description"]); ?>" /> </head>

<body>

	<!--侧滑菜单容器-->
		<div id="offCanvasWrapper" class="mui-off-canvas-wrap mui-draggable">
			<!--菜单部分-->
			
			<aside id="offCanvasSide" class="mui-off-canvas-right">
				<div id="offCanvasSideScroll" class="mui-scroll-wrapper">
					<div class="mui-scroll">
						<ul class="mui-table-view mui-table-view-chevron mui-table-view-inverted">
						        <li class="mui-table-view-cell mui-collapse">
						            <a class="mui-navigate-right">
						                Item 1
						            </a>
						            <ul class="mui-table-view mui-table-view-chevron mui-table-view-inverted">
						                    <li class="mui-table-view-cell">
						                        <a class="mui-navigate-right">
						                            Item 1
						                        </a>
						                    </li>
						                    <li class="mui-table-view-cell">
						                        <a class="mui-navigate-right">
						                             Item 2
						                        </a>
						                    </li>
						                    <li class="mui-table-view-cell">
						                        <a class="mui-navigate-right">
						                             Item 3
						                        </a>
						                    </li>
						                </ul>
						            
						        </li>
						        <li class="mui-table-view-cell">
						            <a class="mui-navigate-right">
						                 Item 2
						            </a>
						        </li>
						        <li class="mui-table-view-cell">
						            <a class="mui-navigate-right">
						                 Item 3
						            </a>
						        </li>
						    </ul>
					
						
					</div>
				</div>
				
			</aside>
			
			<div class="mui-inner-wrap">
				<header class="mui-bar mui-bar-nav" style="background: #3889C7;">
					<a class="mui-icon mui-icon-home mui-pull-left c-white" ></a>
					<a id="offCanvasBtn" href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right  c-white"></a>
					<h1 class="mui-title"><img src="logo.png" height="40" /></h1>
				</header>
				<div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
					<div class="mui-scroll">
						<div class="mui-content-padded">
								6546546546546546546546
						</div>



					</div>
				</div>
				<!-- off-canvas backdrop -->
				<div class="mui-off-canvas-backdrop"></div>
			</div>
		</div>
</body>
</html>