<div id="edit_contact_info" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action = "<?php echo e(url('/contact/club/edit')); ?>" method = "post">
                <?php echo e(csrf_field()); ?>

                <input type = 'hidden' name = 'active_tab' value = 'tab_2_1'>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">club contact info</h4>
                </div>
                <div class="modal-body">
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;">
                        <div class="scroller" style="margin-right:-17px; height: 317px; overflow: scroll; width: auto;" data-always-visible="1" data-rail-visible1="1" data-initialized="1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class = "row">
                                        <div class="col-md-12">
                                            <h4 style="text-align:center;">Meeting Location</h4>
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class="col-md-12">
                                            <label for = "city">City</label>
                                            <input type="text" id = "city" name = "city" class="col-md-12" value = "<?php echo e($theContact -> city); ?>">
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class="col-md-12">
                                            <label for = "state">State</label>
                                            <input type="text" id = "state" name = "state" class="col-md-12" value = "<?php echo e($theContact -> state); ?>">
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class="col-md-12">
                                            <label for = "zcod">Zipcode</label>
                                            <input type="text" id = "zcod" name = "zipcode" class="col-md-12" value = "<?php echo e($theContact -> zipcode); ?>">
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class="col-md-12">
                                            <div id="gmap_marker" class="gmaps"></div>
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class="col-md-12">
                                            <label for = "">Primary Contact</label>
                                            <select name = "pcmid">
                                                    <option>None</option>
                                                <?php $__currentLoopData = $theClubUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aUser): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                    <option value = "<?php echo e($aUser -> id); ?>" <?php if( $theContact -> pcm_id == $aUser -> id ): ?> selected <?php endif; ?>><?php echo e($aUser -> email); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class="col-md-12">
                                            <label for = "zcod">Secondary Contact</label>
                                            <select name = "scmid">
                                                    <option>None</option>
                                                <?php $__currentLoopData = $theClubUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aUser): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                    <option value = "<?php echo e($aUser -> id); ?>" <?php if( $theContact -> scm_id == $aUser -> id ): ?> selected <?php endif; ?>><?php echo e($aUser -> email); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class = "row">
                                        <div class = "col-md-1">
                                            <div class="socicon-btn socicon-sm socicon-linkedin tooltips col-md-1" data-original-title="Linkedin"></div>
                                        </div>
                                        <div class = "col-md-6">
                                            <input type="url" name = "inLink" class="col-md-6 form-control" value = "<?php echo e($theContact ->linkedin); ?>">
                                        </div>
                                        <div class = "col-md-5">
                                            <select name = "inLevel" class="col-md-5 form-control">
                                                <option <?php if($theContact -> level_in == 'Public'): ?><?php echo e('selected'); ?><?php endif; ?>>Public</option>
                                                <option <?php if($theContact -> level_in == 'Members Only'): ?><?php echo e('selected'); ?><?php endif; ?>>Members Only</option>
                                                <option <?php if($theContact -> level_in == 'Private'): ?><?php echo e('selected'); ?><?php endif; ?>>Private</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class = "col-md-1">
                                            <div class="socicon-btn socicon-sm socicon-twitter tooltips col-md-1" data-original-title="Twitter"></div>
                                        </div>
                                        <div class = "col-md-6">
                                            <input type="url" name = "ttLink" class="col-md-6 form-control" value = "<?php echo e($theContact -> twitter); ?>">
                                        </div>
                                        <div class = "col-md-5">
                                            <select name = "ttLevel" class="col-md-5 form-control">
                                                <option <?php if($theContact -> level_t == 'Public'): ?><?php echo e('selected'); ?><?php endif; ?>>Public</option>
                                                <option <?php if($theContact -> level_t == 'Members Only'): ?><?php echo e('selected'); ?><?php endif; ?>>Members Only</option>
                                                <option <?php if($theContact -> level_t == 'Private'): ?><?php echo e('selected'); ?><?php endif; ?>>Private</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class = "col-md-1">
                                            <div class="socicon-btn socicon-sm socicon-facebook tooltips col-md-1" data-original-title="Facebook"></div>
                                        </div>
                                        <div class = "col-md-6">
                                            <input type="url" name = "fbLink" class="col-md-6 form-control" value = "<?php echo e($theContact -> facebook); ?>">
                                        </div>
                                        <div class = "col-md-5">
                                            <select name = "fbLevel" class="col-md-5 form-control">
                                                <option <?php if($theContact -> level_f == 'Public'): ?><?php echo e('selected'); ?><?php endif; ?>>Public</option>
                                                <option <?php if($theContact -> level_f == 'Members Only'): ?><?php echo e('selected'); ?><?php endif; ?>>Members Only</option>
                                                <option <?php if($theContact -> level_f == 'Private'): ?><?php echo e('selected'); ?><?php endif; ?>>Private</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class = "col-md-1">
                                            <div class="socicon-btn socicon-sm socicon-youtube tooltips col-md-1" data-original-title="Youtube"></div>
                                        </div>
                                        <div class = "col-md-6">
                                            <input type="url" name = "ytLink" class="col-md-6 form-control" value = "<?php echo e($theContact -> youtube); ?>">
                                        </div>
                                        <div class = "col-md-5">
                                            <select name = "ytLevel" class="col-md-5 form-control">
                                                <option <?php if($theContact -> level_y == 'Public'): ?><?php echo e('selected'); ?><?php endif; ?>>Public</option>
                                                <option <?php if($theContact -> level_y == 'Members Only'): ?><?php echo e('selected'); ?><?php endif; ?>>Members Only</option>
                                                <option <?php if($theContact -> level_y == 'Private'): ?><?php echo e('selected'); ?><?php endif; ?>>Private</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class = "col-md-1">
                                            <div class="socicon-btn socicon-sm socicon-google tooltips col-md-1" data-original-title="Google"></div>
                                        </div>
                                        <div class = "col-md-6">
                                            <input type="url" name = "goLink" class="col-md-6 form-control" value = "<?php echo e($theContact -> googleplus); ?>">
                                        </div>
                                        <div class = "col-md-5">
                                            <select name = "goLevel" class="col-md-5 form-control">
                                                <option <?php if($theContact -> level_g == 'Public'): ?><?php echo e('selected'); ?><?php endif; ?>>Public</option>
                                                <option <?php if($theContact -> level_g == 'Members Only'): ?><?php echo e('selected'); ?><?php endif; ?>>Members Only</option>
                                                <option <?php if($theContact -> level_g == 'Private'): ?><?php echo e('selected'); ?><?php endif; ?>>Private</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class = "col-md-1">
                                            <div class="socicon-btn socicon-sm socicon-mail tooltips col-md-1" data-original-title="Mail"></div>
                                        </div>
                                        <div class = "col-md-6">
                                            <input type="url" name = "maLink" class="col-md-6 form-control" value = "<?php echo e($theContact -> mail); ?>">
                                        </div>
                                        <div class = "col-md-5">
                                            <select name = "maLevel" class="col-md-5 form-control">
                                                <option <?php if($theContact -> level_m == 'Public'): ?><?php echo e('selected'); ?><?php endif; ?>>Public</option>
                                                <option <?php if($theContact -> level_m == 'Members Only'): ?><?php echo e('selected'); ?><?php endif; ?>>Members Only</option>
                                                <option <?php if($theContact -> level_m == 'Private'): ?><?php echo e('selected'); ?><?php endif; ?>>Private</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 300px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                    <button type="submit" class="btn green">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>