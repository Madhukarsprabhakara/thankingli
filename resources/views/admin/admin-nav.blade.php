<nav>

                                        <!-- OPTIONS LIST -->
                                        <ul class="nav pull-right">
					@if (Route::has('login'))
							@if (Auth::check())
                                                <!-- USER OPTIONS -->
                                                <li class="dropdown pull-left">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                <img class="user-avatar" alt="" src="assets-admin/images/noavatar.jpg" height="34" /> 
                                                                <span class="user-name">
                                                                        <span class="hidden-xs">
                                                                                {{ Auth::user()->name }} <i class="fa fa-angle-down"></i>
                                                                        </span>
                                                                </span>
                                                        </a>
                                                        <ul class="dropdown-menu hold-on-click">
                                                                <li><!-- my calendar -->
                                                                        <a href="calendar.html"><i class="fa fa-calendar"></i> Calendar</a>
                                                                </li>
                                                                <li><!-- my inbox -->
                                                                        <a href="#"><i class="fa fa-envelope"></i> Inbox
                                                                                <span class="pull-right label label-default">0</span>
                                                                        </a>
                                                                </li>
                                                                <li><!-- settings -->
                                                                        <a href="page-user-profile.html"><i class="fa fa-cogs"></i> Settings</a>
                                                                </li>

                                                                <li class="divider"></li>

                                                                <li><!-- lockscreen -->
                                                                        <a href="page-lock.html"><i class="fa fa-lock"></i> Lock Screen</a>
                                                                </li>
                                                                <li><!-- logout -->
                                                                        <a href="{{ route('logout') }}"
                                           						 onclick="event.preventDefault();
                                                    					 document.getElementById('logout-form').submit();">
                                           					 Logout
                                       					 </a>

                                       					 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           					 {{ csrf_field() }}
                                       					 </form>
                                                                </li>
                                                        </ul>
                                                </li>
						@endif
					@endif
                                                <!-- /USER OPTIONS -->

                                        </ul>
                                        <!-- /OPTIONS LIST -->

                                </nav>