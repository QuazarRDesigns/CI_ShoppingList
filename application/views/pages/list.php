<?php if ($this->session->flashdata('success')): ?>
    <div style="color: green; font-weight: bold;"><?= ($this->session->flashdata('success')); ?></div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
    <div style="color: red; font-weight: bold;"><?= ($this->session->flashdata('error')); ?></div>
<?php endif; ?>

<?php if (!isset($_SESSION['is_logged_in'])): ?>
    <h5 class="center-align">You gotta <?= anchor('todos/login', 'Log In'); ?> to add to your shopping list!</h5>
<?php endif; ?>  

<?php if (isset($_SESSION['is_logged_in'])): ?> 
    <ul class="collection with-header">
    <li class="collection-header"><h5>Shopping List</h5></li>
     <div class="btn-floating btn waves-effect waves-light text-white cyan lighten-2"><?= anchor('todos/add_edit', '<i class="material-icons">add</i>'); ?></div>  

        <?php
        $complete_query = $this->db->select('id')->where('status', 'complete')->get('items');
        $pending_query = $this->db->select('id')->where('status', 'pending')->get('items');
        ?>

        <?php foreach ($todos as $todo): ?>
             
                  
                <?php if ($complete_query): ?>
                    <?php foreach ($complete_query->result_array() as $complete_row): ?>
                        <?php if ($todo->id === $complete_row['id']): ?>
                <li class="collection-item"><?= anchor('todos/uncomplete/' . $todo->id, '<i class="grey-text material-icons">check_circle</i>');?>    <span class="complete"><?= $todo->item; ?></span><?= anchor('todos/delete/' . $todo->id, '<i class="right grey-text material-icons">delete</i>'); ?><?= anchor('todos/add_edit/' . $todo->id, '<i class="grey-text material-icons right">edit</i>'); ?></li>
                        <?php endif ?>
                    <?php endforeach; ?>
                <?php endif ?>

                
                <?php if ($pending_query): ?>
                    <?php foreach ($pending_query->result_array() as $pending_row): ?>
                        <?php if ($todo->id === $pending_row['id']): ?>
                           <li class="collection-item">
                               <?php $checkdata = array( 'id' => 'check' ); ?>
                               
                               <!--TODO fix onclick function-->
                               <?php $checkjs = array('onClick' => 'todos/complete/'); ?>
                            
                                   <?php // echo form_checkbox($checkdata, $checkjs['onClick']); ?>
                              <!--<label for="check">--> 
                               <?= anchor('todos/complete/' . $todo->id, '<i class="grey-text material-icons">check</i>');?>  <span class="pending"><?= $todo->item; ?></span>
                              <!--</label>-->
                                    <?= anchor('todos/delete/' . $todo->id, '<i class="grey-text material-icons right">delete</i>'); ?><?= anchor('todos/add_edit/' . $todo->id, '<i class="grey-text material-icons right">edit</i>'); ?> </li>
                       
                                       <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
        <?php endforeach; ?>
                       
    <?php endif; ?>   
</ul>