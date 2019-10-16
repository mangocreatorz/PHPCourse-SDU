



<div class="card uper">
  <div class="card-header">
    Add Item
  </div>
  <div class="card-body">
    
      <div class="alert alert-danger">
        <ul>
            
              <li>{{ $errors }}</li>
            
        </ul>
      </div><br />
    
      <form method="post" action="{{ route('form.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Item Name:</label>
              <input type="text" class="form-control" name="item_name"/>
          </div>
          
          <div class="form-group">
              <label for="quantity">Item Price :</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <button type="submit" class="btn btn-primary">Create Item</button>
      </form>
  </div>
</div>
