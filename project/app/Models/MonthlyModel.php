<?php

namespace App\Models;

use CodeIgniter\Model;

class MonthlyModel extends Model
{
    protected $table = 'monthly';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','month','newsletter','news_q','g_grant','grand','global','global_p','trf_club','contribution','trf_member','phe','phe_q','mphf','maj','aks','asha','new','mem_term','head','h_title','h_price','status'];
}

?>