<?php

/**
 * 
 */
class Api_model extends CI_Model {

    function __construct() {
        parent:: __construct();
    }

    public function getAllDataColumn($table, $columnName, $where) {
        $this->db->where($where);
        $this->db->select($columnName);
        $this->db->distinct();
        $query = $this->db->get($table);
        return $query->result();
    }

    public function getFilterData($table, $Data, $where) {
        if (!empty($Data)) {
            foreach ($Data as $key => $value) {
                if ($value) {
                    $this->db->where_in($key, $value);
                }
            }
        }

        $this->db->where($where);
        $this->db->select("*");
        $this->db->distinct();
        $query = $this->db->get($table);
        return $query->result();
    }

    /* Get single row data */

    public function getSingleRow($table, $condition) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() <= 0) {
            return NULL;         
        }
        return $query->row();
    }
	
	public function getInvoiceSpecialCall($table, $condition) {
		$this->db->select('*');
		$this->db->from(`booking_invoice`);
		$this->db->where($condition);
		$query = $this->db->get();
        return $query->row();
	}
    
    
    public function getsinglewhere($table) {
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->row();
    }

    /* Get single row data */

    public function getSingleRowOrderBy($table, $condition) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($condition);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    /* Get All data with where clause */

    public function getAllDataWhereLimit($where, $table, $page) {
        $this->db->where($where);
        $this->db->select("*");
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    /* Get single row data */

    public function getSingleRowCloumn($columnName, $table, $condition) {
        $this->db->select($columnName);
        $this->db->from($table);
        $this->db->where($condition);
        $query = $this->db->get();
        return $query->row();
    }

    /* Insert and get last Id */

    public function insertGetId($table, $data) {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    /* Check existing record */

    function checkData($table, $condition, $columnName) {
        $this->db->select($columnName);
        $this->db->from($table);
        $this->db->like($condition);
        return $this->db->count_all_results();
    }

    /* Get All data with where clause */

    public function getAllDataDistinct($table) {
        $this->db->distinct('user_id');
        $this->db->select('user_id');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    /* Get no of records */

    function getCountWhere($table, $condition) {
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where($condition);
        return $this->db->count_all_results();
    }

    /* Check existing record */

    function getCount($table, $condition) {
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where($condition);
        return $this->db->count_all_results();
    }

    /* Get no of records */

    function getMontlyUserCount() {
        $sql = "SELECT  DATE_FORMAT(FROM_UNIXTIME(created_at), '%b') as month, Count(*) as count FROM user WHERE FROM_UNIXTIME(created_at) >= CURDATE() - INTERVAL 1 YEAR GROUP BY Month(FROM_UNIXTIME(created_at))";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    /* Get no of records */

    function getMontlyRevenue() {
        $sql = "SELECT  DATE_FORMAT(FROM_UNIXTIME(created_at), '%b') as month, sum(total_amount) as count FROM booking_invoice WHERE FROM_UNIXTIME(created_at) >= CURDATE() - INTERVAL 1 YEAR GROUP BY Month(FROM_UNIXTIME(created_at))";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    /* Get no of records */

    function getMontlyRevenue1($user_id) {
        $sql = "SELECT  DATE_FORMAT(FROM_UNIXTIME(created_at), '%d') as day, sum(total_amount) as count FROM booking_invoice WHERE artist_id = $user_id AND   FROM_UNIXTIME(created_at) >= CURDATE() - INTERVAL 1 Month GROUP BY DAY(FROM_UNIXTIME(created_at))";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getWeekSum($columnName, $where, $table) {
        $this->db->select_sum($columnName);
        $this->db->where($where);
        $this->db->where('created_at BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW()');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    function getCountAll($table) {
        $this->db->select("*");
        $this->db->from($table);
        return $this->db->count_all_results();
    }

    /* Get All data with Limit */

    public function getAllDataLimit($table, $limit) {
        $this->db->select("*");
        $this->db->from($table);
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }

    /* Get All data with Limit */

    public function getAllDataLimitWhere($table, $where, $limit) {
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where($where);
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }

    /* Update any data */

    public function updateSingleRow($table, $where, $data) {
        $this->db->where($where);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateWhereIn($where, $where_in, $table, $data) {
        $this->db->where($where);
        $this->db->where_in('status', $where_in);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateJob($table, $where, $status) {
        $this->db->where($where);
        $this->db->set('status', $status, FALSE);
        $this->db->update($table);
        if ($this->db->affected_rows() > 0) {

            return TRUE;
        } else {

            return FALSE;
        }
    }

    /* Add new data */

    function insert($table, $data) {
        if ($this->db->insert($table, $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /* Get All data */

    public function getAllDataNotWhere($table, $status) {
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where('status !=', $status);
        $query = $this->db->get();
        return $query->result();
    }

    /* Get All data */

    public function getAllData($table) {
        $this->db->select("*");
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    /* Get All data with where clause */

    public function getAllDataWhere($where, $table) {
        $this->db->where($where);
        $this->db->select("*");
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    /* Get All data with where clause */

    public function getAllDataWhereOrderTwo($where, $table) {
        $this->db->where($where);
        $this->db->select("*");
        $this->db->from($table);
        $this->db->order_by('flag ASC, created_at DESC');
        $query = $this->db->get();
        return $query->result();
    }

    /* Get All data with where clause */

    public function getAllDataWhereoderBy($where, $table) {
        $this->db->where($where);
        $this->db->select("*");
        $this->db->from($table);
        $this->db->order_by('created_at', "DESC");
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllDataWhereoderByJob($where, $table) {
        $this->db->where($where);
        $this->db->select("*");
        $this->db->from($table);
        $this->db->order_by('job_timestamp', "DESC");
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getAllsubcategory($where, $table) {
        $this->db->where($where);
        $this->db->select("*");
        $this->db->from($table);
        $this->db->order_by('id', "DESC");
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getAllsliders($table) {
        $this->db->select("*");
        $this->db->from($table);
        $this->db->order_by('id', "DESC");
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllJobNotAppliedByArtist($artist_id, $category_id, $tag = 'all') {

        if ($tag == 1) {
            $sql = "SELECT * FROM `post_job` where status = 0 and category_id=$category_id and job_date=CURDATE()and  job_id not in ( select job_id from applied_job where artist_id=$artist_id) order by created_at DESC;";
        } else if ($tag == 2) {

            $sql = "SELECT * FROM `post_job` where status = 0 and category_id=$category_id and job_date=CURDATE()+1 and job_id not in ( select job_id from applied_job where artist_id=$artist_id) order by created_at DESC;";
        } else if ($tag == 3) {

            $sql = "SELECT * FROM `post_job` where status = 0 and category_id=$category_id and job_date>CURDATE()+1  and  job_id not in ( select job_id from applied_job where artist_id=$artist_id) order by created_at DESC;";
        } else {

            $sql = "SELECT * FROM `post_job` where status = 0 and category_id=$category_id and job_id not in ( select job_id from applied_job where artist_id=$artist_id) order by created_at DESC;";
        }
        $query = $this->db->query($sql);

        return $query->result();
    }

    /* Get All data with where clause */

    public function getAllDataWhereAndOr($where, $whereOr, $table) {
        $this->db->where($where);
        $this->db->or_where($whereOr);
        $this->db->select("*");
        $this->db->from($table);
        $this->db->order_by("created_at", "desc");
        $query = $this->db->get();

        return $query->result();
    }

    /* Get All data with where clause */

    public function getAllDataWhereDistinct($where, $table) {
        $this->db->distinct('user_id');
        $this->db->where($where);
        $this->db->select("user_id");
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    /* Get All data with where clause */

    public function getAllDataWhereDistinctArtist($where, $table) {
        $this->db->distinct('artist_id');
        $this->db->where($where);
        $this->db->select("artist_id");
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }

    // Count avarage 
    public function getAvgWhere($columnName, $table, $where) {
        $this->db->select_avg($columnName);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    // Count avarage 
    public function getTotalWhere($table, $where) {
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->num_rows();
    }

    // get sum 
    public function getSum($columnName, $table) {
        $this->db->select_sum($columnName);
        $this->db->from($table);
        $query = $this->db->get();
        return $query->row();
    }

    // get sum 
    public function getSumWhere($columnName, $table, $where) {
        $this->db->select_sum($columnName);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row();
    }

    // get sum 
    public function getSumWhereIn($columnName, $table, $where, $where_in) {
        $this->db->select_sum($columnName);
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where_in('payment_type', $where_in);
        $query = $this->db->get();
        return $query->row();
    }

    public function deleteRecord($where, $table) {
        $this->db->where($where);
        $query = $this->db->delete($table);
    }

    public function getNearestData($lat, $lng, $table, $user_id) {
        $this->db->select("*, ( 3959 * acos( cos( radians($lat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($lng) ) + sin( radians($lat) ) * sin( radians( latitude ) ) ) ) AS distance");
        $this->db->from($table);
        $this->db->where('user_id !=', $user_id);
        $this->db->having('distance <= ', '1');
        $this->db->order_by('distance');
        $this->db->limit(1, 0);
        $query = $this->db->get();
        return $query->row();
    }

    public function getNearestDataWhere($lat, $lng, $table, $where, $user_id, $distance) {
        $this->db->select("*, ( 3959 * acos( cos( radians($lat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($lng) ) + sin( radians($lat) ) * sin( radians( latitude ) ) ) ) AS distance");
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where('user_id !=', $user_id);
        $this->db->having('distance <= ', $distance);
        $this->db->order_by('distance');
        $this->db->limit(1, 0);
        $query = $this->db->get();
        return $query->row();
    }

    public function getNearestDataWhereResult($lat, $lng, $table, $where, $user_id, $distance) {
        $this->db->select("*, ( 3959 * acos( cos( radians($lat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($lng) ) + sin( radians($lat) ) * sin( radians( latitude ) ) ) ) AS distance");
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where('user_id !=', $user_id);
        $this->db->having('distance <= ', $distance);
        $this->db->order_by('distance');
        $this->db->limit(1, 0);
        $query = $this->db->get();
        return $query->result();
    }

    public function getNearestDataResult($lat, $lng, $table, $user_id, $distance) {
        $this->db->select("*, ( 3959 * acos( cos( radians($lat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($lng) ) + sin( radians($lat) ) * sin( radians( latitude ) ) ) ) AS distance");
        $this->db->from($table);
        $this->db->where('user_id !=', $user_id);
        $this->db->having('distance <= ', $distance);
        $this->db->order_by('distance');
        $this->db->limit(1, 0);
        $query = $this->db->get();
        return $query->result();
    }

    public function getNearestDataWhereResultFiltter($lat, $lng, $table, $where, $user_id, $distance) {
        $this->db->select("*, ( 3959 * acos( cos( radians($lat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($lng) ) + sin( radians($lat) ) * sin( radians( latitude ) ) ) ) AS distance");
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where('user_id !=', $user_id);
        $this->db->having('distance <= ', $distance);
        $this->db->order_by('distance');
        $query = $this->db->get();
        return $query->result();
    }

    public function getNearestDataResultFiltter($lat, $lng, $table, $user_id, $distance) {
        $this->db->select("*, ( 3959 * acos( cos( radians($lat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($lng) ) + sin( radians($lat) ) * sin( radians( latitude ) ) ) ) AS distance");
        $this->db->from($table);
        $this->db->where('user_id !=', $user_id);
        $this->db->having('distance <= ', $distance);
        $this->db->order_by('distance');
        $query = $this->db->get();
        return $query->result();
    }

    public function getWhereInStatus($table, $where, $columnName, $where_in) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where_in($columnName, $where_in);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    public function getWhereInStatusResult($table, $where, $columnName, $where_in) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where_in($columnName, $where_in);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getWhereInStatusResultJob($table, $where, $columnName, $where_in) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where_in($columnName, $where_in);
        $this->db->order_by('aj_id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function check_applied_job($artist_id, $job_id) {
        $this->db->where('artist_id', $artist_id);
        $this->db->where('job_id', $job_id);
        $this->db->select("*");
        $this->db->from('applied_job');
        $query = $this->db->get();
        return $query->result();
    }

    public function add_favorites($data) {
        $str = $this->db->insert('favourite', $data);
    }

    public function get_favorites($user_id) {
        $this->db->where('user_id', $user_id);
        $this->db->select("*");
        $this->db->from('favourite');
        $query = $this->db->get();
        return $query->result();
    }

    public function check_favorites($user_id, $artist_id) {
        $this->db->where('artist_id', $artist_id);
        $this->db->where('user_id', $user_id);
        $this->db->select("*");
        $this->db->from('favourite');
        $query = $this->db->get();
        return $query->result();
    }

    public function remove_favorites($user_id, $artist_id) {
        $this->db->where('artist_id', $artist_id);
        $this->db->where('user_id', $user_id);
        $query = $this->db->delete('favourite');
    }

}
