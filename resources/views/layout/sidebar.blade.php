<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('/img/sidebar-1.jpg') }}">

    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Red Oak">
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active ">
                <a class="nav-link" href="{{ asset('/') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ asset('profile') }}">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#expenseTabs">
              <i class="material-icons">grid_on</i>
              <p> Expense
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="expenseTabs">
              <ul class="nav">
                <li class="nav-item" id="expenseAll">
                  <a class="nav-link" href="{{ asset('expense-sheet') }}">
                    <i class="material-icons">content_paste</i>
                    <span class="sidebar-normal"> Expense Sheet</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ asset('expense-sheet') }}">
                    <span class="sidebar-mini"> ET </span>
                    <span class="sidebar-normal"> Expense Sheet </span>
                  </a>
                </li>
                
              </ul>
            </div>
          </li>
            
        </ul>
    </div>
</div>

