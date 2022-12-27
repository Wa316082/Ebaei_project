<!Doctype html>
<html>

<head>
    <title>CN Print</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset('admin/css/CN_page.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <section class="header">

            <div class="row">
                <div class="logo col-sm-12 col-md-4 col-lg-4"><img src="{{ asset('admin/images/logo-cn.png') }}"
                        alt=""> </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <table class="first_table table">
                        <tr>
                            <th class="">
                                <h2>Customer Care</h2>
                            </th>
                        </tr>
                        <tr>
                            <td>Hotline:<b>Hotline#+01923335550</b> </td>
                        </tr>
                        <tr>
                            <td>Email:<b> customercare@baeiexpress.com</b></td>
                        </tr>
                        <tr>
                            <td>Website:<b>www.baeiexpress.com<b></td>
                        </tr>

                    </table>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <table class="second_table table">
                        <tr>
                            <th>
                                <h2 class="head"> International Airway bill</h2>
                            </th>
                        </tr>

                        <tr>
                            <td><a>{{ $order->waybill_number }}</a></td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="number">{{ $order->waybill_number }}</h2>
                            </td>
                        </tr>

                    </table>

                </div>
            </div>

        </section>
        <!----------------------------------------------------------------------
---------------------------------------------------------------------------------->
        <section class="information details">
            <table class="form-table">
                <thead class="bg-danger text-white border">
                    <tr class="">
                        <th class="border border-white" colspan="2">From(Sender)</th>
                        <th class="border border-white" colspan="2">To(Receiver)</th>
                        <th class="border border-white" colspan="5">Destination city</th>
                    </tr>
                </thead>
                <tr>
                    <td> Sender name <br><span> {{ $order->sender_name }}</span></td>
                    <td> Account name </td>
                    <td> Receiver Name <br><span> {{ $order->reciver_name }}</span> </td>
                    <td> Department </td>
                    <td colspan="2">Origin City <br> {{ $order->zone->name }}</td>
                    <td colspan="3">Destination<br> {{ $order->reciever_zone->name }} </td>
                </tr>
                <tr>
                    <td colspan="2"> Company name</td>
                    <td colspan="2"> Company name</td>
                    <td colspan="2">service provider</td>
                    <td colspan="3">Gatwey</td>
                </tr>
                <tr>
                    <td rowspan="6" colspan="2">Adress <br><br> {{ $order->sender_address }}</td>
                    <td rowspan="6" colspan="2">Adress <br><br> {{ $order->reciver_address }}</td>
                    <td colspan="5"> Service details</td>
                </tr>
                <tr>
                    <td colspan="2"><input type="checkbox" name="#" value=" {{ $order->percel_type }} ">
                        Document</td>
                    <td colspan="3"><input type="checkbox" name="#"> Non-Document</td>
                </tr>
                <tr>
                    <td colspan="2"><input type="checkbox" name="#"> Document</td>
                    <td colspan="3"><input type="checkbox" name="#"> Non-Document</td>
                </tr>
                <tr>
                    <td colspan="5">Dimentional Weight</td>

                </tr>
                <tr>
                    <td>CTN</td>
                    <td>Length</td>
                    <td>width</td>
                    <td>Height</td>
                    <td>Total</td>

                </tr>

                <tr>
                    <td>{{ $order->gross_weight }}</td>
                    <td>{{ $order->length }}</td>
                    <td>{{ $order->width }}</td>
                    <td>{{ $order->height }}</td>
                    <td>{{ $order->final_weight }}</td>


                </tr>
                <tr>
                    <td rowspan="2">Post Code : {{ $order->sender_post_code }}</td>
                    <td rowspan="2">Country : <br><span>{{ $order->country->name }}</span> </td>
                    <td rowspan="2">Post code : {{ $order->reciver_post_code }}</td>
                    <td rowspan="2">Country : <br><span>{{ $order->reciever_country->name }}</span> </td>
                    <td colspan="5">Chargable weight</td>

                </tr>
                <tr>
                    <td colspan="2">PCS: {{ $order->pieces }} Piec(s)</td>
                    <td colspan="3">KG: {{ $order->final_weight }}kg</td>
                </tr>
                <tr>
                    <td>Email : {{ $order->sender_email }}</td>
                    <td>Phone/mobile : {{ $order->sender_contact }}</td>
                    <td>Email : {{ $order->reciver_email }}</td>
                    <td>Phone/mobile : {{ $order->reciver_contact }}</td>
                    <td colspan="5">Decleared value for Customs</td>

                </tr>
                <tr>
                    <th colspan="2">Sender authorise and signeture</th>
                    <th colspan="2">Full Description Of content</th>
                    <th colspan="5">Shiping Charge</th>
                </tr>
                <tr>
                    <td class="m-auto" rowspan="5" colspan="2">I/We will agree that BAEI's standard terms apply to
                        this shipment and limit BAEI's liability. The withdraw convention may also apply (see below).
                        I/We understand that BAEI does not transport cash or dangerious goods(see below) <br> <br>
                        Signeture: <br> <br> Date: </td>
                    <td rowspan="5"> </td>
                    <td rowspan="5">{{ $order->waybill_number }}</td>
                    <td colspan="4">Servise charge</td>
                    <td> </td>
                </tr>
                <tr>
                    <td colspan="4">Aditional</td>
                    <td> </td>
                </tr>
                <tr>
                    <td colspan="4">other charge</td>
                    <td> </td>
                </tr>
                <tr>
                    <td colspan="4">VAT</td>
                    <td> </td>
                </tr>
                <tr>
                    <td colspan="4">Total amount</td>
                    <td> BD </td>
                </tr>
                <tr>
                    <td colspan="2">Received Shipment in Good order and <br> condition<br><br> Signeture: <br> Date:
                    </td>
                    <td colspan="2">Service By: Sajedur rahman<br><br> Received Date & Time :17 December 2022 09:52
                        am</td>

                    <td colspan="2">Payment Status</td>
                    <td colspan="3">Declared Value</td>

                </tr>


            </table>



        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>


</body>

</html>
