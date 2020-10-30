
<div class="modal fade" id="new_ordinance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class='col-md-10'>
                    <h5 class="modal-title" id="exampleModalLabel">New Ordinance</h5>
                </div>
                <div class='col-md-2'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <form method='POST' action='new-ordinance' onsubmit='show();'  enctype="multipart/form-data" >
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class='col-md-12'>
                       Ordinance No.:
                       <input class='form-control' type='text' name='ordinance_number' required>
                    </div>
                    <div class='col-md-12'>
                       Title:
                       <input class='form-control' type='text' name='title' required>
                    </div>
                    <div class='col-md-12'>
                       Date Approved:
                       <input class='form-control' type='date' name='date_approved' >
                    </div>
                    <div class='col-md-12'>
                       Status :
                       <select class='form-control'  name='status' required>
                           <option value=''></option>
                           <option value='Approved'>Approved</option>
                        <option value='Disapproved'>Disapproved</option>
                       </select>
                    </div>
                    <div class='col-md-12'>
                       Category :
                       <select class='form-control'  name='category' required>
                           <option value=''></option>
                           @foreach($categories as $category)
                           <option value='{{$category->name}}'>{{$category->name}}</option>
                           @endforeach
                       </select>
                    </div>
                    <div class='col-md-12'>
                        File:
                        <input class='form-control' type='file' name='attachment' required>
                     </div>
                    <div class='col-md-12'>
                        Remarks:
                        <textarea class='form-control' type='file' name='remarks' ></textarea>
                     </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type='submit'  class="btn btn-primary" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>