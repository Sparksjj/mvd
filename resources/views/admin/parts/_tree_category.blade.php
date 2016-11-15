<div class="col-md-4" id="category-tree-helper" >
<span class="label label-default" id="hide-category-tree-helper">K</span>
    <div id="jstree">
            @each('admin.parts._tree_category_children', $tree, 'category')
    </div>
</div>

<style>
    #category-tree-helper{
        position: relative;
        margin: 0 auto;
    }
    #hide-category-tree-helper{
        position: absolute;
        left: -15px;
        top: 1px;
        cursor: pointer;
        z-index: 2;
        opacity: 0.5;
    }
    #jstree{
        display: none;
        margin-bottom: 20px;
    }
</style>
