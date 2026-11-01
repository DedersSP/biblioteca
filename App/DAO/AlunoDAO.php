<?php

class AlunoDAO
{
    protected $table = 'alunos';
    protected $primaryKey = 'ID';
    protected $fillable = ['Nome', 'Email', 'RA', 'Curso'];


 
}