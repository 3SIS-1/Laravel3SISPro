
@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && 
    $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' 
    && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">
            
        <nav id="sidebar">
            <div class="shadow-bottom"></div>

            <ul class="list-unstyled menu-categories" id="accordionExample">
                
                @if ($page_name != 'alt_menu' && $page_name != 'blank_page' && $page_name != 'boxed' && $page_name != 'breadcrumb' )

                    <li class="menu {{ ($category_name === 'dashboard') ? 'active' : '' }}">
                        <a href="#dashboard" data-active="{{ ($category_name === 'dashboard') ? 'true' : 'false' }}" 
                           data-toggle="collapse" aria-expanded="{{ ($category_name === 'dashboard') ? 'true' : 'false' }}" 
                           class="dropdown-toggle">
                            <div class="">                               
                                <span style='color:#F5821F'>Configuration</span>
                            </div>
                        </a>                        
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'dashboard') ? 'show' : '' }}" id="dashboard" 
                        data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'sales') ? 'active' : '' }}">
                                <a href="/sales"> Country </a>
                            </li>
                            <li class="{{ ($page_name === 'analytics') ? 'active' : '' }}">
                                <a href="/analytics"> Analytics </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ ($category_name === 'apps') ? 'active' : '' }}">
                        <a href="#app" data-active="{{ ($category_name === 'apps') ? 'true' : 'false' }}" data-toggle="collapse" 
                        aria-expanded="{{ ($category_name === 'apps') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <span>Application</span>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'apps') ? 'show' : '' }}" id="app" 
                        data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'chat') ? 'active' : '' }}">
                                <a href="/apps/chat"> Chat </a>
                            </li>
                            <li class="{{ ($page_name === 'mailbox') ? 'active' : '' }}">
                                <a href="/apps/mailbox"> Mailbox  </a>
                            </li>
                            <li class="{{ ($page_name === 'todo-list') ? 'active' : '' }}">
                                <a href="/apps/todoList"> Todo List </a>
                            </li>                            
                            <li class="{{ ($page_name === 'notes') ? 'active' : '' }}">
                                <a href="/apps/notes"> Notes </a>
                            </li>
                            <li class="{{ ($page_name === 'scrumboard') ? 'active' : '' }}">
                                <a href="/apps/scrumboard">Scrumboard</a>
                            </li>
                            <li class="{{ ($page_name === 'contacts') ? 'active' : '' }}">
                                <a href="/apps/contacts"> Contacts </a>
                            </li>
                            <li class="{{ ($page_name === 'invoice') ? 'active' : '' }}">
                                <a href="/apps/invoice"> Invoice List </a>
                            </li>
                            <li class="{{ ($page_name === 'calendar') ? 'active' : '' }}">
                                <a href="/apps/calendar"> Calendar </a>
                            </li>
                        </ul>
                    </li>
                
                @endif
                
            </ul>
            
        </nav>

    </div>
    <!--  END SIDEBAR  -->

@endif