<?php

class Aluno
{
    protected $table = 'alunos';
    protected $primaryKey = 'ID';
    protected $fillable = ['Nome', 'Email', 'RA', 'Curso'];


 
}