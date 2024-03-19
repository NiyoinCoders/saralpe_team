@extends('layouts.app')
@section('title', 'Recharge Prepaid')
@section('styles')
    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            background-color: #f8f8f8;
        }
        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            color: #999;
            font-size: 14px;
        }
        /* Create an active/current tablink class */
        .tab button.active {
            border-bottom: 2px solid #1e6ad8;
            color: black;
        }
        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
        }
    </style>
@endsection
@section('content')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">Bootstrap Datatables</h4>
                </div>
             </div>
             <div class="card-body">
                <div class="table-responsive">
                   <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap5"><div class="row align-items-center"><div class="col-md-6"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-md-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="table-responsive border-bottom my-3"><table id="datatable" class="table table-striped dataTable" data-toggle="data-table" aria-describedby="datatable_info">
                      <thead>
                         <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 169.55px;">Name</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 268.175px;">Position</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 126.325px;">Office</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 42.4875px;">Age</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 108.375px;">Start date</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 101.762px;">Salary</th></tr>
                      </thead>
                      <tbody>


                      <tr class="odd">
                            <td class="sorting_1">Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                         </tr><tr class="even">
                            <td class="sorting_1">Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2009/10/09</td>
                            <td>$1,200,000</td>
                         </tr><tr class="odd">
                            <td class="sorting_1">Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                         </tr><tr class="even">
                            <td class="sorting_1">Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>2012/10/13</td>
                            <td>$132,000</td>
                         </tr><tr class="odd">
                            <td class="sorting_1">Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2011/06/07</td>
                            <td>$206,850</td>
                         </tr><tr class="even">
                            <td class="sorting_1">Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                         </tr><tr class="odd">
                            <td class="sorting_1">Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>38</td>
                            <td>2011/05/03</td>
                            <td>$163,500</td>
                         </tr><tr class="even">
                            <td class="sorting_1">Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                         </tr><tr class="odd">
                            <td class="sorting_1">Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>New York</td>
                            <td>46</td>
                            <td>2011/12/06</td>
                            <td>$145,600</td>
                         </tr><tr class="even">
                            <td class="sorting_1">Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                         </tr></tbody>

                   </table></div><div class="row align-items-center"><div class="col-md-6"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li></ul></div></div></div><div class="clear"></div></div>
                </div>
             </div>
          </div>
       </div>
    </div>
       </div>

@endsection
@section('scripts')
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
        $("select[name='operator']").on("change", function() {
            $.ajax({
                url: "{{ route('recharge-plan.plan-list') }}",
                type: "POST",
                data: {
                    id: $(this).val()
                },
                dataType: "JSON",
                success: function(result) {
                    var data = result.data;
                    var popular = data.populars;
                    var special_recharge = data.special_recharge;
                    var top_up = data.top_up;
                    var data_structure = data.internet_data;
                    var full_talktime = data.full_talktime;
                    if (popular.length > 0) {
                        var popular_html = "";
                        for (let index = 0; index < popular.length; index++) {
                            const popular_element = popular[index];
                            console.log(popular_element.circle);
                            popular_html += '<tr>';
                            popular_html += '<td>' + popular_element.circle + '</td>';
                            popular_html += '<td>' + popular_element.plan_category_name + '</td>';
                            popular_html += '<td>' + popular_element.data + '</td>';
                            popular_html += '<td>' + popular_element.validity + '</td>';
                            popular_html +=
                                '<td><button class="btn btn-outline-info rounded-pill" style="padding: 3px 13px;" onclick="changeamount(' +
                                popular_element.price + ')">₹ ' + popular_element.price +
                                '</button></td>';
                            popular_html += '<td>' + popular_element.description + '</td>';
                            popular_html += '</tr>';
                        }
                        $("#popular table tbody").html(popular_html);
                    }
                    if (special_recharge.length > 0) {
                        var special_recharge_html = "";
                        for (let index = 0; index < special_recharge.length; index++) {
                            const special_recharge_element = special_recharge[index];
                            special_recharge_html += '<tr>';
                            special_recharge_html += '<td>' + special_recharge_element.circle + '</td>';
                            special_recharge_html += '<td>' + special_recharge_element
                                .plan_category_name + '</td>';
                            special_recharge_html += '<td>' + special_recharge_element.data + '</td>';
                            special_recharge_html += '<td>' + special_recharge_element.validity +
                                '</td>';
                            special_recharge_html +=
                                '<td><button class="btn btn-outline-info rounded-pill" style="padding: 3px 13px;" onclick="changeamount(' +
                                special_recharge_element.price + ')">₹ ' + special_recharge_element
                                .price +
                                '</button></td>';
                            special_recharge_html += '<td>' + special_recharge_element.description +
                                '</td>';
                            special_recharge_html += '</tr>';
                        }
                        $("#special_recharge table tbody").html(special_recharge_html);
                    }
                    if (top_up.length > 0) {
                        var top_up_html = "";
                        for (let index = 0; index < top_up.length; index++) {
                            const top_up_element = top_up[index];
                            top_up_html += '<tr>';
                            top_up_html += '<td>' + top_up_element.circle + '</td>';
                            top_up_html += '<td>' + top_up_element.plan_category_name + '</td>';
                            top_up_html += '<td>' + top_up_element.data + '</td>';
                            top_up_html += '<td>' + top_up_element.validity + '</td>';
                            top_up_html +=
                                '<td><button class="btn btn-outline-info rounded-pill" style="padding: 3px 13px;" onclick="changeamount(' +
                                top_up_element.price + ')">₹ ' + top_up_element.price +
                                '</button></td>';
                            top_up_html += '<td>' + top_up_element.description + '</td>';
                            top_up_html += '</tr>';
                        }
                        $("#top_up table tbody").html(top_up_html);
                    }
                    if (data_structure.length > 0) {
                        var data_structure_html = "";
                        for (let index = 0; index < data_structure.length; index++) {
                            const data_structure_element = data_structure[index];
                            data_structure_html += '<tr>';
                            data_structure_html += '<td>' + data_structure_element.circle + '</td>';
                            data_structure_html += '<td>' + data_structure_element.plan_category_name +
                                '</td>';
                            data_structure_html += '<td>' + data_structure_element.data + '</td>';
                            data_structure_html += '<td>' + data_structure_element.validity + '</td>';
                            data_structure_html +=
                                '<td><button class="btn btn-outline-info rounded-pill" style="padding: 3px 13px;" onclick="changeamount(' +
                                data_structure_element.price + ')">₹ ' + data_structure_element.price +
                                '</button></td>';
                            data_structure_html += '<td>' + data_structure_element.description +
                                '</td>';
                            data_structure_html += '</tr>';
                        }
                        $("#data_structure table tbody").html(data_structure_html);
                    }
                    if (full_talktime.length > 0) {
                        var full_talktime_html = "";
                        for (let index = 0; index < full_talktime.length; index++) {
                            const full_talktime_element = full_talktime[index];
                            full_talktime_html += '<tr>';
                            full_talktime_html += '<td>' + full_talktime_element.circle + '</td>';
                            full_talktime_html += '<td>' + full_talktime_element.plan_category_name +
                                '</td>';
                            full_talktime_html += '<td>' + full_talktime_element.data + '</td>';
                            full_talktime_html += '<td>' + full_talktime_element.validity + '</td>';
                            full_talktime_html +=
                                '<td><button class="btn btn-outline-info rounded-pill" style="padding: 3px 13px;" onclick="changeamount(' +
                                full_talktime_element.price + ')">₹ ' + full_talktime_element.price +
                                '</button></td>';
                            full_talktime_html += '<td>' + full_talktime_element.description + '</td>';
                            full_talktime_html += '</tr>';
                        }
                        $("#full_talktime table tbody").html(full_talktime_html);
                    }
                }
            })
        });
        function lists(evt, listdata) {
            // Declare all variables
            var i, tabcontent, tablinks;
            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(listdata).style.display = "block";
            evt.currentTarget.className += " active";
        }
        function changeamount(amount) {
            $("#amount").val(amount);
        }
    </script>
@endsection
