<header id="main-header" class="bg-success text-white p-4 mb-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <h1 id="header-title">Item Lister</h1>
        </div>
        <div class="col-md-6 align-self-center">
            <input type="text" class="form-control" id="filter" placeholder="Search Items...">
        </div>
      </div>
    </div>
  </header>
  <div class="container">
   <div id="main" class="card card-body">
    <h2 class="title">Add Items</h2>
    <form id="addForm" class="form-inline mb-3">
      <input type="text" class="form-control mr-2" id="item">
      <input type="submit" class="btn btn-dark" value="Submit">
    </form>
    <h2 class="title">Items</h2>
    <ul id="items" class="list-group">
      <li class="list-group-item">Item 1 <button class="btn btn-danger btn-sm float-right delete">X</button></li>
      <li class="list-group-item">Item 2 <button class="btn btn-danger btn-sm float-right delete">X</button></li>
      <li class="list-group-item">Item 3 <button class="btn btn-danger btn-sm float-right delete">X</button></li>
      <li class="list-group-item">Item 4 <button class="btn btn-danger btn-sm float-right delete">X</button></li>
    </ul>
   </div>
  </div>
