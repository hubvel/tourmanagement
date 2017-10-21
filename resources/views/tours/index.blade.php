@extends('layouts.main')
@section('title', 'Tour management')

<!-- Content -->
@section('content')
<form class="form-horizontal frm_tour" name="frm_tour" method="POST" action="{{route('tours.store')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="title" placeholder="title" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Details</label>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-md-11">
                    <div class="table-responsive">
                        <table class="table table-bordered tbl_tour_detail">
                            <thead>
                                <tr>
                                    <th>Start day</th>
                                    <th>Place total</th>
                                    <th>Place for sale</th>
                                    <th>Adult price for agency</th>
                                    <th>Adult price for client</th>
                                    <th>Child price for agency</th>
                                    <th>Child price for client</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#tour_package_modal">Add</button>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="duration" class="col-sm-2 control-label">Druation</label>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-md-5">
                    <input type="text" class="form-control" name="duration" placeholder="Druation" required>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <label for="vehicles" class="col-sm-2 control-label">Vehicles</label>
                        <div class="col-sm-10">
                            <select name="vehicles" class="form-control" required>
                                @foreach($vehicles as $key => $vehicle)
                                <option value="{{$key}}">{{$vehicle}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="start_place" class="col-sm-2 control-label">Start place</label>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" id="start_place" class="form-control" name="start_place" placeholder="Start place" required>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-default btn-start-place-add">Add</button>
                        </div>
                    </div>
                    <!-- Load list start place here -->
                    <div class="row">
                        <div class="col-md-12 start-place-append"></div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <label for="end_place" class="col-sm-2 control-label">Destination</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="text" id="end_place" class="form-control" name="end_place" placeholder="Destination" required>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-default btn-end-place-add">Add</button>
                                </div>
                            </div>

                            <!-- Load list end place here -->
                            <div class="row">
                                <div class="col-md-12 end-place-append"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inclusions" class="col-sm-2 control-label">Inclusions</label>
        <div class="col-sm-10">
            <textarea name="inclusions" class="form-control" placeholder="Inclusions" required></textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="common_policies" class="col-sm-2 control-label">Policies and note</label>
        <div class="col-sm-10">
            <textarea name="common_policies" class="form-control" placeholder="Policies and note" required></textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="agency_policies" class="col-sm-2 control-label">Policies for agency</label>
        <div class="col-sm-10">
            <textarea name="agency_policies" class="form-control" placeholder="Policies for agency" required></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-md-2">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="show_for_agency" checked value="1"> Show for agency
                </label>
            </div>
        </div>
        <div class="col-md-2">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="show_for_customer" checked value="1"> Show for customer
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="button" class="btn btn-success btn-save-tour">Update tour</button>
            <button type="button" class="btn btn-default">Cancel</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade tour_package_modal" id="tour_package_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tour_start_date" class="col-sm-2 control-label">Start date</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control frm_detail tour_start_date" name="tour_start_date" placeholder="Start date">
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-default">Add</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="place_total" class="col-sm-2 control-label">Place total</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control frm_detail place_total" name="place_total" placeholder="Place total">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="place_for_sale" class="col-sm-2 control-label">Place for sale</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control frm_detail place_for_sale" name="place_for_sale" placeholder="Place for sale">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price_agency_adult" class="col-sm-2 control-label">Adult price for agency</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control frm_detail price_agency_adult" name="price_agency_adult" placeholder="Adult price for agency">
                        </div>

                        <label for="price_client_adult" class="col-sm-2 control-label">Client</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control frm_detail price_client_adult" name="price_client_adult" placeholder="Adult price for client">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price_agency_child" class="col-sm-2 control-label">Child price for agency</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control frm_detail price_agency_child" name="price_agency_child" placeholder="Child price for agency">
                        </div>

                        <label for="price_client_child" class="col-sm-2 control-label">Client</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control frm_detail price_client_child" name="price_client_child" placeholder="Child price for client">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <button type="button" class="btn btn-primary btn-tour-detail-ok">Add package</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Close</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer hidden">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Modal -->

</form>

@endsection
<!-- ./ Content -->

<!-- Script sestion -->
@push('scripts')
<script>
    /**
     *
     * Data format for tour_package
     * tour_start_date
     * place_total
     * place_for_sale
     * price_agency_adult
     * price_client_adult
     * price_agency_child
     * price_client_child
     */

    var tour_data = [];
    var tour_package = [];
    var start_place = [];
    var end_place = [];
    var frmTourPost = '{{route("tours.store")}}';

    var place_focus = '';

    var placeSearch, autocompleteStartPlace, autocompleteEndPlace;
    var maps_result = {
        country: '',
        address: '',
        state: '',
        city: '',
        zipcode: '',
        lat: '',
        lng: '',
        name: ''
    };

    var _form = $('.frm_tour');

    $(document).ready(function () {
        _form.validate({});

        $('.tour_start_date').datetimepicker({
            format: 'YYYY-MM-DD',
            minDate: moment()
        });

        //: Event for btn-tour-detail-ok click
        $('.btn-tour-detail-ok').click(function () {
            var tour_package_data = {};
            var tour_detail_list = '';
            tour_detail_list += `<tr>`;
            $('.frm_detail').each(function (key, val) {
                var data_key = $(val).prop('name');
                var data_val = $(val).prop('value');
                tour_package_data[data_key] = data_val;

                //: Append data to tabl (Note: stt of form same with stt of list)
                tour_detail_list += `<td>${data_val}</td>`;
            });

            tour_detail_list += `</tr>`;
            $('.tbl_tour_detail > tbody').append(tour_detail_list);

            //: Push data to array
            tour_package.push(tour_package_data);

            return;
        });

        //: Remove start place from list.
        $('.start-place-append').on('click', 'i', function () {
            var _this = $(this);

            //: Check list, remove by key and hidden item
            start_place.splice($.inArray(_this.data('key'), start_place), 1);
            _this.parent('div').addClass('hidden');

            return;
        });

        //: Remove start place from list.
        $('.end-place-append').on('click', 'i', function () {
            var _this = $(this);

            //: Check list, remove by key and hidden item
            end_place.splice($.inArray(_this.data('key'), end_place), 1);
            _this.parent('div').addClass('hidden');

            return;
        });

        //:
        $('#start_place').keydown(function () {
            place_focus = 'start_place';
        });
        $('#end_place').keydown(function () {
            place_focus = 'end_place';
        });

        //: Save tour
        $('.btn-save-tour').click(function () {
            var form_data = {};
            var formSerializeArray = $('.frm_tour').serializeArray();
            var detail_field = ['tour_start_date', 'place_total', 'place_for_sale', 'number_adult', 'number_child', 'price_agency_adult', 'price_agency_child', 'price_client_adult', 'price_client_child'];

            $.each(formSerializeArray, function (key, val) {
                form_data[val.name] = val.value;
            });

            //: Remove detail field
            $.each(detail_field, function(key, val) {
                delete(form_data[val]);
            });

            //: Assign start_place, distination, tour_package_data
            form_data['start_place'] = start_place;
            form_data['end_place'] = end_place;
            form_data['tour_package'] = tour_package;

            //: Check valid and submit data
            if( _form.valid() ){
                $.ajax({
                    type: 'POST',
                    data: form_data,
                    url: frmTourPost,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }).done(function(res) {
                    alert(res.message);
                }).fail(function(res) {
                    console.log(res);
                });
            }

            return;
        });

        //: Init autocomplete
        initPlaceAutoComplete('start_place');
        initPlaceAutoComplete('end_place');

    });


    function initPlaceAutoComplete(type) {

        var map_init = document.getElementById(type);
        var options = {};

        //: For map_start_place
        var autocomplete = new google.maps.places.Autocomplete(map_init, options);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            maps_result = getMapInfo(place, "auto");

            var map_start_place_append = '';
            var map_end_place_append = '';
            if (place_focus === 'start_place') {
                //: Push data to start_place and reload list.
                start_place.push(maps_result.address);
                $.each(start_place, function (key, val) {
                    map_start_place_append += `<div>${val} <i data-key=${key}>&times;</i></div>`;
                });

                //: Reset list and reload
                $('.start-place-append').empty().append(map_start_place_append);
            } else {
                //: Push data to start_place and reload list.
                end_place.push(maps_result.address);
                $.each(end_place, function (key, val) {
                    map_end_place_append += `<div>${val} <i data-key=${key}>&times;</i></div>`;
                });

                //: Reset list and reload
                $('.end-place-append').empty().append(map_end_place_append);
            }

            return;
        });
    }

    function getMapInfo(place, type) {

        if (place.geometry) {
            if (type == "get") {
                maps_result.lat = place.geometry.location.lat;
                maps_result.lng = place.geometry.location.lng;
            } else if (type == "auto") {
                maps_result.lat = place.geometry.location.lat();
                maps_result.lng = place.geometry.location.lng();
            } else {
                return maps_result;
            }
        } else {
            return maps_result;
        }

        maps_result.address = place.formatted_address;
        maps_result.name = place.name;

        //: Get country
        for (var i = 0; i < place.address_components.length; i++) {
            for (var b = 0; b < place.address_components[i].types.length; b++) {
                if (place.address_components[i].types[b] === "country") {
                    maps_result.country = place.address_components[i].short_name;
                    break;
                }
            }
        }

        for (var i = 0; i < place.address_components.length; i++) {
            for (var b = 0; b < place.address_components[i].types.length; b++) {
                if (place.address_components[i].types[b] === "administrative_area_level_1") {
                    maps_result.state = place.address_components[i].long_name;
                    break;
                }
            }
        }

        for (var i = 0; i < place.address_components.length; i++) {
            for (var b = 0; b < place.address_components[i].types.length; b++) {
                if (place.address_components[i].types[b] === "locality") {
                    maps_result.city = place.address_components[i].long_name;
                    break;
                }
            }
        }

        //get postcode
        for (var i = 0; i < place.address_components.length; i++) {
            for (var b = 0; b < place.address_components[i].types.length; b++) {
                if (place.address_components[i].types[b] === "postal_code") {
                    maps_result.zipcode = place.address_components[i].short_name;
                    break;
                }
            }
        }
        return maps_result;
    }
</script>
@endpush