@extends('admin.admin_master')
@section('admin')

 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Facture</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li>
                                            <li class="breadcrumb-item active">Facture</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
    <div class="row">
        <div class="col-12">
            <div class="invoice-title">
                <h4 class="float-end font-size-16"><strong>Facture No # {{ $invoice->invoice_no }}</strong></h4>
                <h3>
                    Logiciel de gestion de stock
                </h3>
            </div>
            <hr>
             
            <div class="row">
                <div class="col-6 mt-4">
                    <address>
                        <strong>Email:</strong><br>
                        mahamadoualiabdoulrazak@gmail.com
                    </address>
                </div>
                <div class="col-6 mt-4 text-end">
                    <address>
                        <strong>Date:</strong><br>
                         {{ date('d-m-Y',strtotime($invoice->date)) }} <br><br>
                    </address>
                </div>
            </div>
        </div>
    </div>

       @php
    $payment = App\Models\Payment::where('invoice_id',$invoice->id)->first();
    @endphp   

    <div class="row">
        <div class="col-12">
            <div>
                <div class="p-2">
                    <h3 class="font-size-16"><strong>Facture client</strong></h3>
                </div>
                <div class="">
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <td><strong>Nom</strong></td>
            <td class="text-center"><strong>Téléphone</strong></td>
            <td class="text-center"><strong>Addresse</strong>
            </td>
            <td class="text-center"><strong>Description</strong>
            </td>
            
        </tr>
        </thead>
        <tbody>
        <!-- foreach ($order->lineItems as $line) or some such thing here -->
        <tr>
            <td> {{ $payment['customer']['name'] }}</td>
            <td class="text-center">{{ $payment['customer']['mobile_no']  }}</td>
            <td class="text-center">{{ $payment['customer']['email']  }}</td>
             <td class="text-center">{{ $invoice->description  }}</td>
            
        </tr>
        
                            
                            </tbody>
                        </table>
                    </div>

                  
                </div>
            </div>

        </div>
    </div> <!-- end row -->





   <div class="row">
        <div class="col-12">
            <div>
                <div class="p-2">
                     
                </div>
                <div class="">
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <td><strong>Sl </strong></td>
            <td class="text-center"><strong>Catégorie</strong></td>
            <td class="text-center"><strong>Nom du produit</strong>
            </td>
            <td class="text-center"><strong>Stock actuel</strong>
            </td>
            <td class="text-center"><strong>Quantité</strong>
            </td>
            <td class="text-center"><strong>Prix unitaire </strong>
            </td>
            <td class="text-center"><strong>Prix total</strong>
            </td>
            
        </tr>
        </thead>
        <tbody>
        <!-- foreach ($order->lineItems as $line) or some such thing here -->
        
      @php
        $total_sum = '0';
        @endphp
        @foreach($invoice['invoice_details'] as $key => $details)
        <tr>
           <td class="text-center">{{ $key+1 }}</td>
            <td class="text-center">{{ $details['category']['name'] }}</td>
            <td class="text-center">{{ $details['product']['name'] }}</td>
            <td class="text-center">{{ $details['product']['quantity'] }}</td>
            <td class="text-center">{{ $details->selling_qty }}</td>
            <td class="text-center">{{ $details->unit_price }}</td>
            <td class="text-center">{{ $details->selling_price }}</td>
            
        </tr>
         @php
        $total_sum += $details->selling_price;
        @endphp
        @endforeach
            <tr>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line text-center">
                    <strong>Subtotal</strong></td>
                <td class="thick-line text-end">${{ $total_sum }}</td>
            </tr>
            <tr>
                <td class="no-line"></td>
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Montant de la remise</strong></td>
                <td class="no-line text-end">${{ $payment->discount_amount }}</td>
            </tr>
             <tr>
                <td class="no-line"></td>
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Montant payé</strong></td>
                <td class="no-line text-end">${{ $payment->paid_amount }}</td>
            </tr>

             <tr>
                <td class="no-line"></td>
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Montant dû</strong></td>
                <td class="no-line text-end">${{ $payment->due_amount }}</td>
            </tr>
            <tr>
                <td class="no-line"></td>
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Montant total</strong></td>
                <td class="no-line text-end"><h4 class="m-0">${{ $payment->total_amount }}</h4></td>
            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-print-none">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                            <a href="#" class="btn btn-primary waves-effect waves-light ms-2">Télécharger</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- end row -->
















</div>
</div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>


@endsection