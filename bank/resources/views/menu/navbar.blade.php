@auth
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #9eadba">
    <div class="container">
      <a class="navbar-brand" href="/">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item"> 
                        <a class="nav-link" href="/tarik">Tarik Tunai</a>
                      </li>
                      <li class="nav-item"> 
                        <a class="nav-link" href="/store">Store Tunai</a>
                      </li>
                      @if (Auth::getUser()->role==3)
                      <li class="nav-item"> 
                        <a class="nav-link" href="/history">History</a>
                      </li>
                      @endif
                      
                 </li>
              </ul>
              <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @if (Auth::getUser()->role=1)
                  <li><button type="submit" class="dropdown-item"><i class="bi bi-person-plus"></i> Tambah Orang</button></li>
                  <li><hr class="dropdown-divider"></li>
                  @endif
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
      