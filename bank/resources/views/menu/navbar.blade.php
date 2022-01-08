@auth
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #9eadba;">
    <div class="container">
      <a class="navbar-brand" href="/">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item"> 
                        <a class="nav-link" href="/">Tarik Tunai</a>
                      </li>
                      <li class="nav-item"> 
                        <a class="nav-link" href="/">Store Tunai</a>
                      </li>
                      <li class="nav-item"> 
                        <a class="nav-link" href="/">History</a>
                      </li>
                 </li>
              </ul>
              <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                      <button type="submit" class="dropdown-item"><span class="bi bi-box-arrow-in-right"></span> Logout </button>
                    </form>
                    </li>
                </ul>
              </li>
              
                <li class="nav-item">
               
                 
               
              </ul>
            </div>
    </div>
      </nav>
      @else
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #9eadba;">
      </nav>
      @endauth