
<?php $__env->startSection('title','Upload Beats'); ?>
<?php $__env->startSection('body'); ?>
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Upload Your Beats
    </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-6 lg:col-span-6">
            <div id="single-file-upload" class="p-5">
                <div class="preview">
                    <form data-single="true" action="<?php echo e(route('drag-drop-image')); ?>" class="dropzone">
                        <?php echo csrf_field(); ?>
                        <div class="fallback">
                            <input name="file" type="file" />
                        </div>
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop Beat Image here or click to upload.</div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
   <div class="intro-y col-span-6 lg:col-span-6">
            <div id="single-file-upload" class="p-5">
                <div class="preview">
                    <form data-single="true" action="<?php echo e(route('drag-drop-audio')); ?>" class="dropzone">
                        <?php echo csrf_field(); ?>
                        <div class="fallback">
                            <input name="file" type="file" />
                        </div>
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop Beat MP3 here or click to upload.</div>
                        </div>
                    </form>
                </div>
            </div>


    </div>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">


        <!-- BEGIN: Form Layout -->
        <div class="intro-y box p-5">
            <form action="<?php echo e(route('beats-store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
             <div class="grid grid-cols-12 gap-2">
                <div class="col-span-4">
                <label for="beat-title" class="form-label">Beat Title</label>
                <input type="text" class="form-control" id="beat_title" name="beat_title" placeholder="Beat Title" required>
                <?php if($errors->has('beat_title')): ?>
                    <span style="color: red"><?php echo e($errors->first('beat_title')); ?></span>
                <?php endif; ?>
                </div>

                <div class="col-span-4">
                <label for="beat-type" class="form-label">Beat Type</label>
                <input type="text" class="form-control" id="beat_type" name="beat_type" placeholder="Beat Type">
                </div>

                <div class="col-span-4">
                <label for="beat-tempo" class="form-label">Beat Tempo</label>
                <input type="text" class="form-control" id="beat_tempo" name="beat_tempo" placeholder="Beat Tempo">
                </div>

                <div class="col-span-3">
                <label for="beat-genre" class="form-label">Beat Genre</label>
                <input type="text" class="form-control" id="beat_genre" name="beat_genre" placeholder="Beat Genre">
                </div>
                
                <div class="col-span-3">
                <label for="beat-genre" class="form-label">Beat Price</label>
                <input type="text" class="form-control" id="beat_price" name="beat_price" placeholder="Beat Price" required>
                <?php if($errors->has('beat_price')): ?>
                    <span style="color: red"><?php echo e($errors->first('beat_price')); ?></span>
                <?php endif; ?>
                </div>

                <!--<div class="col-span-3">-->
                <!--<label for="beat_image" class="form-label">Beat Image</label>-->
                <!--<input type="file" class="form-control" id="beat_image" name="beat_image" required>-->
                <!--<?php if($errors->has('beat_image')): ?>-->
                <!--    <span style="color: red"><?php echo e($errors->first('beat_image')); ?></span>-->
                <!--<?php endif; ?>-->
                <!--</div>-->

                <!--<div class="col-span-3">-->
                <!--<label for="beat_mp3" class="form-label">Upload Mp3</label>-->
                <!--<input type="file" class="form-control" id="beat_mp3" name="beat_mp3" required>-->
                <!--<?php if($errors->has('beat_mp3')): ?>-->
                <!--    <span style="color: red"><?php echo e($errors->first('beat_mp3')); ?></span>-->
                <!--<?php endif; ?>-->
                <!--</div>-->
                
                <div class="col-span-3">
                <input type="hidden" class="form-control" id="beat_image" name="beat_image" required>
                </div>

                <div class="col-span-3">
                <input type="hidden" class="form-control" id="beat_mp3" name="beat_mp3" required>
                </div>

                <div class="col-span-6">
                    <div class="input_fields_wrap">
                        <label for="beat_mp3" class="form-label">Beat Tags</label>
                        <div class="form-inline"> 
                            <input type="text" name="tag_name[]" class="form-control" placeholder="Beats Tags">
                            <button class="btn btn-primary add_field_button mx-2 w-24">Add Tags</button> 
                        </div>
                    </div>
                </div>

                <div class="col-span-12">
                    <label for="Beat Description" class="form-label">Beat Description</label>
                    <textarea class="editor"  name="beat_description"></textarea>
                </div>

                <div class="col-span-12">
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>

            </div>
        </form> 
        </div>
        <!-- END: Form Layout -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
   $(document).ready(function() {
    var max_fields      = 5; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append(`<div class="form-inline mt-5"> 
                            <input type="text" name="tag_name[]" class="form-control" placeholder="Beats Tags" required>
                            <button class="btn btn-danger remove_field mx-2 w-24">Remove</button> 
                        </div>`); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>

<script type="text/javascript">

 function dragImage(image)
 {  
    $("#beat_image").val(image);
 }

 function dragAudio(audio)
 {
    $("#beat_mp3").val(audio);
 }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/buybeats/public_html/resources/views/beats/create.blade.php ENDPATH**/ ?>