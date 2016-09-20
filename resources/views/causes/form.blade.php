<div class="row">   
    <div class="col-lg-6">
        <div class="col-lg-12">
            <a href="#" class="thumbnail">
                <img src="http://placehold.it/650x500" alt="...">
            </a>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="col-lg-12 col-md-4 col-sm-6">
    		<div class="form-group form-group-sm">
    			{!! Form::label('name','Name:') !!}
    			{!! Form::text('name', null, ['class'=>'form-control']) !!}
    		</div>
    	</div>
        
        <div class="col-lg-6 col-md-4 col-sm-6">
    		<div class="form-group form-group-sm">
    			{!! Form::label('start_date','Start Date:') !!}
    			{!! Form::date('start_date',null, ['class'=>'form-control']) !!}
    		</div>
    	</div>
        <div class="col-lg-6 col-md-4 col-sm-6">
            <div class="form-group form-group-sm">
                {!! Form::label('end_date','End Date:') !!}
                {!! Form::date('end_date',null, ['class'=>'form-control']) !!}
            </div>
        </div>    
        <div class="col-lg-12">
            <div class="form-group">
                {!! Form::label('description','Description:') !!}
                {!! Form::textarea('note', null, ['class'=>'form-control','rows'=>'3','style'=>'width: 100%;'])  !!}
            </div> 
        </div>  
    </div>
</div>