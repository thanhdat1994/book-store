<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('<<',['tag'=>'li'],'<<',['tag'=>'li','disableTag'=>'a','class'=>'disable']); ?>
        <?= $this->Paginator->numbers(['separator'=>'','tag'=>'li','currentClass'=>'active','currentTag'=>'a']); ?>
        <?= $this->Paginator->next('>>',['tag'=>'li'],'>>',['tag'=>'li','disableTag'=>'a','class'=>'disable']); ?>
    </ul>    
</div>