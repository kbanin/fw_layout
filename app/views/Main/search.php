<div class="mt-4">
    <div class="text-center">
        <?=$countPageNews?> Новостей из <?=$total?>
        <br>
        <br>
    </div>
    <div class="d-flex justify-content-center">
        <div id="pagination" class="pagination">
            <? for ($i=1;$i<=ceil($total/$perpage);$i++): ?>
            <button onclick="loadNews(<?=$i?>)" class="btn btn-sm btn-link"><?=$i?></button>
            
            <?endfor?>
        </div>
    </div>
</div>