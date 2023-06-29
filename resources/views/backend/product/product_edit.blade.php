@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Modification d'un produit </h4><br><br>
            
  

 <form method="post" action="{{ route('product.update') }}" id="myForm" >
                @csrf

                <input type="hidden" name="id" value="{{ $product->id }}">

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Libelle </label>
                <div class="form-group col-sm-10">
                    <input name="name" value="{{ $product->name }}" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nom du fournisseur </label>
        <div class="col-sm-10">
            <select name="supplier_id" class="form-select" aria-label="Default select example">
                <option selected="">Ouvrir ce menu de sélection</option>
                @foreach($supplier as $supp)
                <option value="{{ $supp->id }}" {{ $supp->id == $product->supplier_id ? 'selected' : '' }}   >{{ $supp->name }}</option>
               @endforeach
                </select>
        </div>
    </div>
  <!-- end row -->

      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Unité</label>
        <div class="col-sm-10">
            <select name="unit_id" class="form-select" aria-label="Default select example">
                <option selected="">Ouvrir ce menu de sélection</option>
                @foreach($unit as $uni)
                <option value="{{ $uni->id }}" {{ $uni->id == $product->unit_id ? 'selected' : '' }} >{{ $uni->name }}</option>
               @endforeach
                </select>
        </div>
    </div>
  <!-- end row -->



      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nom de catégorie</label>
        <div class="col-sm-10">
            <select name="category_id" class="form-select" aria-label="Default select example">
                <option selected="">Ouvrir ce menu de sélection</option>
                @foreach($category as $cat)
                <option value="{{ $cat->id }}" {{ $cat->id == $product->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
               @endforeach
                </select>
        </div>
    </div>
  <!-- end row -->
 
        
<input type="submit" class="btn btn-info waves-effect waves-light" value="Mettre á jour">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                }, 
                 supplier_id: {
                    required : true,
                },
                 unit_id: {
                    required : true,
                },
                 category_id: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : 'Veuillez entrer le nom de votre produit',
                },
                supplier_id: {
                    required : 'Veuillez sélectionner un fournisseur',
                },
                unit_id: {
                    required : 'Veuillez sélectionner une unité',
                },
                category_id: {
                    required : 'Veuillez sélectionner une catégorie',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>


 
@endsection 
