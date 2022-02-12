<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivityModel extends Model
{
    protected $table = 'activity';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','project','ongoing','role','rotary','date_from','date_to','title','description','impact','program_type','activity_class','activity_type','area_of_focus','category','sub_category','cost','funding','contribution','rotarians','rotarian_hrs','volunteers','volunteer_hrs','speaker','rotaractors','rotaractor_hrs','direct','media','facebook','showcase','picture_1','p2_desc','picture_2','p2_desc','picture_3','p3_desc','picture_4','p4_desc','picture_5','p5_desc','status'];
}

?>