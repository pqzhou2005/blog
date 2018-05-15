<?php

namespace App\Presenters;

use App\Repositories\CategoryRepositoryEloquent;
use App\Transformers\CategoryTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CategoryPresenter
 *
 * @package namespace App\Presenters;
 */
class CategoryPresenter extends FractalPresenter
{
    protected $category;

    public function __construct(CategoryRepositoryEloquent $category)
    {
        $this->category = $category;
        parent::__construct();
    }

    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CategoryTransformer();
    }

    /**
     * category selects
     *
     * @param int $defaultCategoryId
     * @param string $nullText
     * @return string
     */
    public function getSelect($defaultCategoryId = 0, $nullText = '请选择', $nullValue = 0)
    {
        $category = $this->category->getNestedList();
        $select = "<select id='cate_id' name='cate_id' class='form-control'>";
        $select .= "<option value='".$nullValue."'>--".$nullText."--</option>";
        if ($category) {
            foreach ($category as $key => $value) {
                $selected = $key == $defaultCategoryId ? " selected " : "";
                $select .= "<option value='".$key."' ".$selected.">".$value."</option>";
            }
        }
        $select .= "</select>";

        return $select;
    }

}
