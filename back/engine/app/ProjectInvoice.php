<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class ProjectInvoice extends Model
{
    public $timestamps = true;
    public $table = "proj_project_invoices";
    public $primaryKey = "last_id";

    public function final()
    {
        return $this->hasOne(Invoice::class, "last_id", "final_invoice_id");
    }
}