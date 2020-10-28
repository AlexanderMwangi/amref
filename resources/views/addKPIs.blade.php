@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <br>
            <form>
              <div class="form-group">
                <label for="exampleInputPassword1">Select objective</label>
                <select id="size" class="form-control">
                    <option value="0">Department Goal 1</option>
                    <option value="1">Department Goal 2</option>
                    <option value="2">Department Goal 3</option>
                </select>
              </div>
               <div class="form-group">
                <label for="exampleInputPassword1">Performance Indicator</label>
               <textarea rows="4" class="form-control"></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

