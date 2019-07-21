 <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black">
                        {{Auth::user()->name}}

                    </div>
                    <div class="email" style="color: black">{{Auth::user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="color: black">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="{{route('admin.sale.create')}}"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>



                            <li>
                                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="material-icons">account_circle</i> 
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li  class="header">MAIN NAVIGATION</li>
                    <li class="{{Request::is('admin/dashboard*')? 'active' : ''}}">
                        <a href="{{route('dashboard')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

            <li class="{{Request::is('admin/product*')? 'active' : ''}}" >
                        <a href="{{route('admin.product.index')}}">
                            <i class="material-icons">shopping_basket</i>
                            <span>Product</span>
                        </a>
                    </li>



                     <li class="{{Request::is('admin/purchase*')? 'active' : ''}}" >
                        <a href="{{route('admin.purchase.index')}}">
                            <i class="material-icons">add_shopping_cart</i>
                            <span>Purchase</span>
                        </a>
                    </li>
                   

                   <li class="{{Request::is('admin/stock*')? 'active' : ''}}" >
                        <a href="{{route('admin.stock.index')}}">
                            <i class="material-icons">store</i>
                            <span>Stock</span>
                        </a>
                    </li>

                      <li class="{{Request::is('admin/account*')? 'active' : ''}}" >
                        <a href="{{route('admin.account.index')}}">
                            <i class="material-icons">money</i>
                            <span>Account</span>
                        </a>
                    </li>

                      <li class="{{Request::is('admin/sale*')? 'active' : ''}}" >
                        <a href="{{route('admin.sale.create')}}">
                            <i class="material-icons">donut_small</i>
                            <span>Sale</span>
                        </a>
                    </li>

                      <li class="{{ Request::is('admin/report*') ? 'active' : '' }}">
                            <a href="{{ route('admin.report.search') }}">
                                <i class="material-icons">dashboard</i>
                                <span>Report</span>
                            </a>
                        </li>
                  
                   
                   
                    
                    
                  
                   
                   
                  
                  
                  
                 
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>