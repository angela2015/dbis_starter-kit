<?php

namespace common\models\query;
use common\models\UserProfile;
use common\models\UserTeacher;
use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[UserTeacher]].
 *
 * @see UserTeacher
 */
class UserTeacherQuery extends ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return UserTeacher[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserTeacher|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }


}
