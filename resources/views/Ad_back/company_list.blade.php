@extends('Ad_back.includeexternal.master')
@section('formcontent')
    <div class="title-heading">Company</div>
     <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone No.</th>
            <th>Facebook Link</th>
            <th>LinkedIn</th>
            <th>Contact Us - Email</th>
            <th>Contact Us - Phone No.</th>
            <th>Logo</th>
            <th>Size</th>
            <th>Modified By</th>
        </tr>
        </thead>
        <tbody>
        <tr>@php $image_path_of_storage = substr($companylistdatashowfordisplay->Logo,'69');
            @endphp
            <td>{{ $companylistdatashowfordisplay->C_Name }}</td>
            <td>{{ $companylistdatashowfordisplay->Description }}</td>
            <td>{{ $companylistdatashowfordisplay->Address }}</td>
            <td>{{ $companylistdatashowfordisplay->Email }}</td>
            <td>{{ $companylistdatashowfordisplay->Phone_No }}</td>
            <td>{{ $companylistdatashowfordisplay->Fb_Link }}</td>
            <td>{{ $companylistdatashowfordisplay->LinkedIn }}</td>
            <td>{{ $companylistdatashowfordisplay->Contact_Us_Email }}</td>
            <td>{{ $companylistdatashowfordisplay->Contact_Phone_No }}</td>
            <td><img src="{{ asset("storage/$image_path_of_storage") }}" width="150" height="150"/></td>
            <td>@if($companylistdatashowfordisplay->Size=='S') {{ "SMALL" }}
                @elseif($companylistdatashowfordisplay->Size=='M') {{ "MEDIUM" }}
                @elseif($companylistdatashowfordisplay->Size=='L') {{ "LARGE" }}
                @elseif($companylistdatashowfordisplay->Size=='XL') {{ "XLARGE" }}
                    @endif
            </td>
            <td>{{ $companylistdatashowfordisplay->Modified_By }}</td>
        </tr>
               </tbody>
        <tfoot>
        <tr>
            <td colspan="12"><a href="companyselupd"><button class="form-smlbutton floatrightside">UPDATE</button></a></td>
        </tr>
        </tfoot>
    </table>
         <textarea name="area" id="area" class="edittextarea">
       Some Initial Content was in this textarea
  </textarea>
           </div>
    @endsection
@push('uppercontent')
    <link href="{{ asset('css/ad_backcss/globalcss.css') }}" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
   @endpush
@push('lowercontent')
    <script src="{{ asset('js/ad_backjs/globaljs.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
        bkLib.onDomLoaded(function() {
            new nicEditor({maxHeight : 200}).panelInstance('area');
        });
    </script>
@endpush