<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSnapshots请求参数结构体
 *
 * @method array getSnapshotIds() 获取要删除的快照ID列表，可通过[DescribeSnapshots](/document/product/362/15647)查询。
 * @method void setSnapshotIds(array $SnapshotIds) 设置要删除的快照ID列表，可通过[DescribeSnapshots](/document/product/362/15647)查询。
 * @method boolean getDeleteBindImages() 获取是否强制删除快照关联的镜像
 * @method void setDeleteBindImages(boolean $DeleteBindImages) 设置是否强制删除快照关联的镜像
 */
class DeleteSnapshotsRequest extends AbstractModel
{
    /**
     * @var array 要删除的快照ID列表，可通过[DescribeSnapshots](/document/product/362/15647)查询。
     */
    public $SnapshotIds;

    /**
     * @var boolean 是否强制删除快照关联的镜像
     */
    public $DeleteBindImages;

    /**
     * @param array $SnapshotIds 要删除的快照ID列表，可通过[DescribeSnapshots](/document/product/362/15647)查询。
     * @param boolean $DeleteBindImages 是否强制删除快照关联的镜像
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
        }

        if (array_key_exists("DeleteBindImages",$param) and $param["DeleteBindImages"] !== null) {
            $this->DeleteBindImages = $param["DeleteBindImages"];
        }
    }
}
