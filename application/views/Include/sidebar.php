<div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="<?php echo base_url().'assets/img/profile_small.jpg'; ?>"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Rahmat</span>
                            <span class="text-muted text-xs block">Admin <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Master Data</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
						<li class="active"><a href="<?php echo base_url() . 'c_master_barang'; ?>">Master Barang</a></li>
                        <li class="active"><a href="<?php echo base_url() . 'c_promo'; ?>">Promo</a></li>
                    </ul>
                </li> 
                <li class="active">
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Transaksi</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
						<li class="active"><a href="<?php echo base_url() . 'c_transaksi'; ?>">Penjualan</a></li>
                    </ul>
                </li> 
            </ul>

        </div>
