<div class="header">

            <div class="header-left">
                <a href="{{url('admin/dashboard')}}" class="logo text-center">
                    <img src="{{url('assets/school/img/logo.jpeg')}}" alt="Logo">
                </a>
                <a href="{{url('admin/dashboard')}}" class="logo logo-small">
                    <img src="{{url('assets/school/img/logo.jpeg')}}" alt="Logo" width="30" height="30">
                </a>
            </div>

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav user-menu">
                

                

                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list win-maximize">
                        <img src="{{url('assets/admin/img/header-icon-04.svg')}}" alt>
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <div class="user-img">
                            <img class="rounded-circle" src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" width="31"
                                alt="{{auth()->user()->name}}">
                            <div class="user-text">
                                <h6>{{auth()->user()->name}}</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" alt="User Image"
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{{auth()->user()->name}}</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="inbox.html">Inbox</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>

            </ul>

        </div>