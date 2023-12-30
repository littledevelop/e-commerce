            <div class="page-sidebar fixedscroll">

                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-xs-4">
                            <a href="ui-profile.php">
                                <img alt="" src="<?php echo $disp_admin['admin_profile'];?>" class="img-responsive img-circle">
                            </a>
                        </div>

                        <div class="profile-details col-xs-8">

                            <h3>
                                <a href="ui-profile.php">ADMIN</a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">Web Developer</p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->



                    <ul class='wraplist'>	

                        <li class='menusection'>Main</li>
                        <li class="open"> 
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-columns"></i>
                                <span class="title">Layouts</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="layout-default.php" >Default Layout</a>
                                </li>
                                <li>
                                    <a class="" href="layout-collapsed.php" >Collapsed Menu</a>
                                </li>
                                <li>
                                    <a class="" href="layout-chat.php" >Chat Open</a>
                                </li>
                                <li>
                                    <a class="" href="layout-boxed.php" >Boxed Layout</a>
                                </li>
                                <li>
                                    <a class="" href="layout-boxed-collapsed.php" >Boxed Collapsed Menu</a>
                                </li>
                                <li>
                                    <a class="" href="layout-boxed-chat.php" >Boxed Chat Open</a>
                                </li>
                            </ul>
                        </li><li class='menusection'>Applications</li>
                        <li class=""> 
                            <a href="manage-category.php">
                                <i class="fa fa-cube"></i>
                                <span class="title">MANAGE CATEGORY</span>
                            </a>
                        </li>

                        <li class=""> 
                            <a href="manage-subcategory.php">
                                <i class="fa fa-cubes"></i>
                                <span class="title">MANAGE SUB CATEGORY</span>
                            </a>
                        </li>

                          <li class=""> 
                            <a href="view_product.php">
                                <i class="fa fa-desktop"></i>
                                <span class="title">Manage Product </span>
                            </a>
                        </li>

                        <li class=""> 
                            <a href="add_offer.php">
                                <i class="fa fa-shield"></i>
                                <span class="title">Manage Offer </span>
                            </a>
                        </li>

                        <li class=""> 
                            <a href="view_seller.php">
                                <i class="fa fa-users"></i>
                                <span class="title">Manage Seller </span>
                            </a>
                        </li>

                        <li class=""> 
                            <a href="view_user.php">
                                <i class="fa fa-user-circle"></i>
                                <span class="title">Manage User </span>
                            </a>
                        </li>


                        <li class=""> 
                            <a href="view_wishlist.php">
                                <i class="fa fa-sun-o"></i>
                                <span class="title">Manage Wishlist </span>
                            </a>
                        </li>

                         <li class=""> 
                            <a href="view_order.php">
                                <i class="fa fa-sun-o"></i>
                                <span class="title">Manage Order </span>
                            </a>
                        </li>
                        <li>
                            <a href="add_reason.php">
                                <i class="fa fa-sun-o"></i>
                                <span class="title">Manage Order Reason</span>
                            </a>
                        </li>

                      <!-- 
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Mailbox</span>
                                <span class="arrow "></span><span class="label label-accent">4</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="mail-inbox.php" >Inbox</a>
                                </li>
                                <li>
                                    <a class="" href="mail-compose.php" >Compose</a>
                                </li>
                                <li>
                                    <a class="" href="mail-view.php" >View</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-comments"></i>
                                <span class="title">Chat API</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="chat-api.php" >Chat API</a>
                                </li>
                                <li>
                                    <a class="" href="chat-windows.php" >Chat Windows</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-bullseye"></i>
                                <span class="title">Widgets</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="widget-misc.php" >Miscellaneous</a>
                                </li>
                                <li>
                                    <a class="" href="widget-tiles-counter.php" >Counter Tiles</a>
                                </li>
                                <li>
                                    <a class="" href="widget-tiles-progress.php" >Progress Tiles</a>
                                </li>
                                <li>
                                    <a class="" href="widget-socialmedia.php" >Social Media</a>
                                </li>
                                <li>
                                    <a class="" href="widget-graphs.php" >Graphs</a>
                                </li>
                                <li>
                                    <a class="" href="widget-todo.php" >To Do Tasks</a>
                                </li>
                            </ul>
                        </li><li class='menusection'>Data Visualization</li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Echarts</span>
                                <span class="arrow "></span><span class="label label-accent">HOT</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="charts-echart-line.php" >Line & Area Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-echart-bar.php" >Bar & Stacked Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-echart-scatter.php" >Scatter Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-echart-pie.php" >Pie Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-echart-gauge.php" >Gauge Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-area-chart"></i>
                                <span class="title">Morris Charts</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="charts-morris-line.php" >Line Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-morris-bar.php" >Bar & Stacked Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-morris-area.php" >Area Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-morris-pie.php" >Pie Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-line-chart"></i>
                                <span class="title">Charts JS</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="charts-chartjs-line.php" >Line Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-chartjs-bar.php" >Bar Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-chartjs-polar-radar.php" >Polar & Radar</a>
                                </li>
                                <li>
                                    <a class="" href="charts-chartjs-pie-donut.php" >Pie & Donut</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">Flot Charts</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="charts-flot-stacked.php" >Stacked Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-flot-area.php" >Area Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-flot-extensions.php" >Flot Extensions</a>
                                </li>
                                <li>
                                    <a class="" href="charts-flot-combined.php" >Combined Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-flot-line.php" >Line Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-flot-pie.php" >Pie Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-line-chart"></i>
                                <span class="title">Sparkline Charts</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="charts-sparkline-line.php" >Line & Area Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-sparkline-bar.php" >Bar Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-sparkline-composite.php" >Composite Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-sparkline-other.php" >Other Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="charts-easypiechart.php">
                                <i class="fa fa-pie-chart"></i>
                                <span class="title">Easy Pie Charts</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-circle-o-notch"></i>
                                <span class="title">Knobs Charts</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="charts-knobs.php" >Knobs</a>
                                </li>
                                <li>
                                    <a class="" href="charts-knobs-clock.php" >Knob Clock</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-area-chart"></i>
                                <span class="title">Rickshaw Charts</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="charts-rickshaw-extensions.php" >Extensions</a>
                                </li>
                                <li>
                                    <a class="" href="charts-rickshaw-scatter.php" >Scatter Charts</a>
                                </li>
                                <li>
                                    <a class="" href="charts-rickshaw-milliseconds.php" >Millisecond Charts</a>
                                </li>
                            </ul>
                        </li><li class='menusection'>Forms</li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-check-square-o"></i>
                                <span class="title">Form Elements</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="form-elements.php" >Field Elements</a>
                                </li>
                                <li>
                                    <a class="" href="form-elements-premade.php" >Pre Made Forms</a>
                                </li>
                                <li>
                                    <a class="" href="form-elements-icheck.php" >Checkbox & Radio</a>
                                </li>
                                <li>
                                    <a class="" href="form-elements-grid.php" >Form Grid</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-sliders"></i>
                                <span class="title">Form Components</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="form-components-datepicker.php" >Date picker</a>
                                </li>
                                <li>
                                    <a class="" href="form-components-timepicker.php" >Time picker</a>
                                </li>
                                <li>
                                    <a class="" href="form-components-daterange.php" >Date Range</a>
                                </li>
                                <li>
                                    <a class="" href="form-components-colorpicker.php" >Color picker</a>
                                </li>
                                <li>
                                    <a class="" href="form-components-spinners.php" >Spinners</a>
                                </li>
                                <li>
                                    <a class="" href="form-components-tagsinput.php" >Tags Input</a>
                                </li>
                                <li>
                                    <a class="" href="form-components-switches.php" >Switches</a>
                                </li>
                                <li>
                                    <a class="" href="form-components-sliders.php" >Sliders</a>
                                </li>
                                <li>
                                    <a class="" href="form-components-select2.php" >Select2</a>
                                </li>
                                <li>
                                    <a class="" href="form-components-typeahead.php" >Typeahead</a>
                                </li>
                                <li>
                                    <a class="" href="form-components-multiselect.php" >Multi Select</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="form-wizard.php">
                                <i class="fa fa-dot-circle-o"></i>
                                <span class="title">Form Wizard</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="form-validation.php">
                                <i class="fa fa-warning"></i>
                                <span class="title">Form Validations</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-text-width"></i>
                                <span class="title">Form Editors</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="form-editors-bootstrap.php" >Bootstrap WYSIHTML5</a>
                                </li>
                                <li>
                                    <a class="" href="form-editors-ckeditor.php" >Ckeditor</a>
                                </li>
                                <li>
                                    <a class="" href="form-editors-inline.php" >Inline editor</a>
                                </li>
                                <li>
                                    <a class="" href="form-editors-markdown.php" >Markdown editor</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-terminal"></i>
                                <span class="title">Form Mask</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="form-masks-input.php" >Input Masks</a>
                                </li>
                                <li>
                                    <a class="" href="form-masks-autonumeric.php" >Autonumeric</a>
                                </li>
                            </ul>
                        </li><li class='menusection'>Page Kits</li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-lock"></i>
                                <span class="title">Access Pages</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-login.php" >Login</a>
                                </li>
                                <li>
                                    <a class="" href="ui-lockscreen.php" >Lock Screen</a>
                                </li>
                                <li>
                                    <a class="" href="ui-register.php" >Registration</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-warning"></i>
                                <span class="title">Error Pages</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-403.php" >403</a>
                                </li>
                                <li>
                                    <a class="" href="ui-404.php" >404</a>
                                </li>
                                <li>
                                    <a class="" href="ui-405.php" >405</a>
                                </li>
                                <li>
                                    <a class="" href="ui-408.php" >408</a>
                                </li>
                                <li>
                                    <a class="" href="ui-500.php" >500</a>
                                </li>
                                <li>
                                    <a class="" href="ui-503.php" >503</a>
                                </li>
                                <li>
                                    <a class="" href="ui-offline.php" >Offline</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-edit"></i>
                                <span class="title">Blog & Search</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-blogs.php" >Blogs</a>
                                </li>
                                <li>
                                    <a class="" href="ui-search.php" >Search</a>
                                </li>
                                <li>
                                    <a class="" href="ui-blog-item.php" >Single Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-share-alt"></i>
                                <span class="title">Social Media</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-profile.php" >User Profile</a>
                                </li>
                                <li>
                                    <a class="" href="ui-members.php" >Members</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-th"></i>
                                <span class="title">Gallery</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-gallery-2col.php" >2 Column Grid</a>
                                </li>
                                <li>
                                    <a class="" href="ui-gallery-3col.php" >3 Column Grid</a>
                                </li>
                                <li>
                                    <a class="" href="ui-gallery-4col.php" >4 Column Grid</a>
                                </li>
                                <li>
                                    <a class="" href="ui-gallery-3col-masonry.php" >3 Column Masonry</a>
                                </li>
                                <li>
                                    <a class="" href="ui-gallery-4col-masonry.php" >4 Column Masonry</a>
                                </li>
                                <li>
                                    <a class="" href="ui-gallery-2col-outside.php" >2 Column with title</a>
                                </li>
                                <li>
                                    <a class="" href="ui-gallery-3col-outside.php" >3 Column with title</a>
                                </li>
                                <li>
                                    <a class="" href="ui-gallery-4col-outside.php" >4 Column with title</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-ellipsis-v"></i>
                                <span class="title">Timeline</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-timeline-centered.php" >Centered timeline</a>
                                </li>
                                <li>
                                    <a class="" href="ui-timeline-left.php" >Left Aligned timeline</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-question-circle"></i>
                                <span class="title">Support</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-faq.php" >FAQ</a>
                                </li>
                                <li>
                                    <a class="" href="ui-tocify.php" >Documentation</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-dollar"></i>
                                <span class="title">Pricing Tables</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-pricing-expanded.php" >Expanded</a>
                                </li>
                                <li>
                                    <a class="" href="ui-pricing-narrow.php" >Narrow</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-money"></i>
                                <span class="title">Invoicing</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-invoice.php" >Invoice</a>
                                </li>
                                <li>
                                    <a class="" href="ui-invoice-list.php" >Invoice Listing</a>
                                </li>
                                <li>
                                    <a class="" href="ui-invoice-add.php" >Invoice Add</a>
                                </li>
                                <li>
                                    <a class="" href="ui-invoice-edit.php" >Invoice Edit</a>
                                </li>
                            </ul>
                        </li><li class='menusection'>User Interface</li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-puzzle-piece"></i>
                                <span class="title">Components</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-tabs.php" >Tabs</a>
                                </li>
                                <li>
                                    <a class="" href="ui-accordion.php" >Accordions</a>
                                </li>
                                <li>
                                    <a class="" href="ui-progress.php" >Progress Bars</a>
                                </li>
                                <li>
                                    <a class="" href="ui-buttons.php" >Buttons</a>
                                </li>
                                <li>
                                    <a class="" href="ui-modals.php" >Modals</a>
                                </li>
                                <li>
                                    <a class="" href="ui-alerts.php" >Alerts</a>
                                </li>
                                <li>
                                    <a class="" href="ui-notifications.php" >Notifications</a>
                                </li>
                                <li>
                                    <a class="" href="ui-tooltips.php" >Tooltips</a>
                                </li>
                                <li>
                                    <a class="" href="ui-popovers.php" >Popovers</a>
                                </li>
                                <li>
                                    <a class="" href="ui-navbars.php" >Navbars</a>
                                </li>
                                <li>
                                    <a class="" href="ui-dropdowns.php" >Dropdowns</a>
                                </li>
                                <li>
                                    <a class="" href="ui-carousel.php" >Carousel Slider</a>
                                </li>
                                <li>
                                    <a class="" href="ui-breadcrumbs.php" >Breadcrumbs</a>
                                </li>
                                <li>
                                    <a class="" href="ui-pagination.php" >Pagination</a>
                                </li>
                                <li>
                                    <a class="" href="ui-labels-badges.php" >Labels & Badges</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-th-large"></i>
                                <span class="title">Appearance</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-typography.php" >Typography</a>
                                </li>
                                <li>
                                    <a class="" href="ui-grids.php" >Grids</a>
                                </li>
                                <li>
                                    <a class="" href="ui-panels.php" >Draggable Panels</a>
                                </li>
                                <li>
                                    <a class="" href="ui-embeds.php" >Video Embeds</a>
                                </li>
                                <li>
                                    <a class="" href="ui-code.php" >Code styles</a>
                                </li>
                                <li>
                                    <a class="" href="ui-group-list.php" >Group Listing</a>
                                </li>
                                <li>
                                    <a class="" href="ui-responsive-images.php" >Responsive Images</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-thumbs-up"></i>
                                <span class="title">Icon Sets</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-icons.php" >Icon Styles</a>
                                </li>
                                <li>
                                    <a class="" href="ui-fontawesome.php" >Font Awesome</a>
                                </li>
                                <li>
                                    <a class="" href="ui-glyphicons.php" >Glyph Icons</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-table"></i>
                                <span class="title">Tables</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="tables-basic.php" >Basic tables</a>
                                </li>
                                <li>
                                    <a class="" href="tables-data.php" >Data Tables</a>
                                </li>
                                <li>
                                    <a class="" href="tables-responsive.php" >Responsive Tables</a>
                                </li>
                            </ul>
                        </li><li class='menusection'>Maps</li>
                        <li class=""> 
                            <a href="ui-vectormaps.php">
                                <i class="fa fa-map-marker"></i>
                                <span class="title">Vector World Map</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="ui-vectormaps-countries.php">
                                <i class="fa fa-map-marker"></i>
                                <span class="title">Vector Country Maps</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="ui-googlemaps.php">
                                <i class="fa fa-map-marker"></i>
                                <span class="title">Google Maps</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="ui-googlemapfull.php">
                                <i class="fa fa-map-marker"></i>
                                <span class="title">Google Map Search API</span>
                            </a>
                        </li><li class='menusection'>Extensions</li>
                        <li class=""> 
                            <a href="ui-imagecrop.php">
                                <i class="fa fa-file-image-o"></i>
                                <span class="title">Image Cropper</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-upload"></i>
                                <span class="title">File Uploader</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="form-fileupload-dropzone.php" >DropZone (Drag & Drop)</a>
                                </li>
                                <li>
                                    <a class="" href="form-fileupload-custom.php" >Custom Uploader</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-table"></i>
                                <span class="title">Datatables</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="tables-data-basic.php" >Basic Datatables</a>
                                </li>
                                <li>
                                    <a class="" href="tables-data-collapsedrow.php" >Collapsed Rows</a>
                                </li>
                                <li>
                                    <a class="" href="tables-data-download.php" >Download Formats</a>
                                </li>
                                <li>
                                    <a class="" href="tables-data-complexheader.php" >Complex Headers</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="ui-sortable.php">
                                <i class="fa fa-sort-amount-asc"></i>
                                <span class="title">Sortable Group</span>
                            </a>
                        </li><li class='menusection'>Navigation</li>
                        <li class=""> <a href="javascript:;"> <i class="fa fa-folder-open"></i> <span class="title">Menu Levels</span> <span class="arrow "></span> </a>
                            <ul class="sub-menu">
                                <li > <a href="javascript:;"> <span class="title">Level 1.1</span> </a> </li>
                                <li > <a href="javascript:;"> <span class="title">Level 1.2</span> <span class="arrow "></span> </a>
                                    <ul class="sub-menu">
                                        <li > <a href="javascript:;"> <span class="title">Level 2.1</span> </a></li>
                                        <li > <a href="ujavascript:;"> <span class="title">Level 2.2</span> <span class="arrow "></span></a> 
                                            <ul class="sub-menu">
                                                <li > <a href="javascript:;"> <span class="title">Level 3.1</span> <span class="arrow "></span></a> 
                                                    <ul class="sub-menu">
                                                        <li > <a href="ujavascript:;"> <span class="title">Level 4.1</span> </a> </li>
                                                        <li > <a href="ujavascript:;"> <span class="title">Level 4.2</span> </a> </li>
                                                    </ul>
                                                </li>
                                                <li > <a href="ujavascript:;"> <span class="title">Level 3.2</span> </a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->


                    </ul>

                    <div class="menustats">    
                        <h5>Project Progress</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                            </div>
                        </div>
                        <h5>Target Achieved</h5>
                        <div class="progress">
                            <div class="progress-bar progress-bar-accent" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- MAIN MENU - END -->



            </div>