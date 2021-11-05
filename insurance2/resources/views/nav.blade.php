      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
          <a class="navbar-brand" href="/home">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="/create_customer">Add Customer <span class="sr-only">(current)</span></a>
                  </li>
                  &nbsp;
                  <li class="nav-item active">
                      <a class="nav-link" href="/create_policy">Add Policy</a>
                  </li>
                  &nbsp;
                  <li class="nav-item active">
                      <a class="nav-link" href="/listofcust">List of Customers</a>
                  </li>
                  &nbsp;
                  <li class="nav-item active">
                      <a class="nav-link" href="/allpolicy">All Policy Records</a>
                  </li>


                  <li class="nav-item form-inline my-2 my-lg-0">
                      <div class="navsearch">
                  <li class="nav-item">
                      <a class="nav-link active" href="/logout">Logout</a>
                  </li>
                  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                  <form method="get" action="/search">
                      <div class="input-group stylish-input-group">
                          <input type="text" id="Search" name="text" class="form-control" placeholder="Search(name,place,vehicle)">
                          <span class="input-group-addon">
                              <button type="submit">
                                  <span class="glyphicon glyphicon-search"></span>
                              </button>
                          </span>
                      </div>

                  </form>
          </div>
          </li>



          </ul>


      </nav>