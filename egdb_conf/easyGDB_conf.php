<?php
// File paths
$root_path = "/var/www/html"; //use absolute path
$egdb_files_folder = "avocadobase";
$easy_gdb_path = "$root_path/easy_gdb";
$blast_dbs_path = "$root_path/blast_dbs";
$expression_path = "$root_path/expression_data";
$downloads_path = "downloads";
$lookup_path = "$root_path/lookup"; //from root 
$images_path = "/$egdb_files_folder/egdb_images";
$custom_text_path = "$root_path/$egdb_files_folder/egdb_custom_text";
$species_path = "$root_path/$egdb_files_folder/egdb_species";
$lab_path = "$root_path/$egdb_files_folder/egdb_labs";
$annotation_links_path = "$root_path/$egdb_files_folder/annotations";

// header
$dbTitle = "AvoBase";
$header_img = "header1.jpg";
$db_logo = "avobase_logo.png";

// Toolbar
$tb_about = 0;
$tb_downloads = 1;
$tb_species = 0;
$tb_search_box = 1;
$tb_tools = 1;
$tb_search = 1;
$tb_blast = 1;
$tb_jbrowse = 1;
$tb_seq_ext = 1;
$tb_annot_ext = 1;
$tb_gene_expr = 0;
$tb_lookup = 1;
$tb_enrichment = 1;
$tb_more = 0;
$tb_custom = 1;

// Expression Atlas
$expr_cards = 1;
$expr_menu = 1;

// About
$ab_citation = 1;
$ab_labs = 0;

//Gene examples
$gene_sample = "";
$input_gene_list="PaHa01g00010.1
PaHa01g00020.1
PaHa01g00030.1
PaHa01g00040.1
PaHa01g00050.1";

// Tools
$max_lookup_input = 10000;
$max_extract_seq_input = 10000;
$max_blast_input = 10;
$max_expression_input = 15;
$max_annotation_input = 15000;


// BLAST
$blast_example=">protein_or_DNA
ATGAAGAAAATTGCCGAGCTAGTGCTGATTCCTGCTCCAGCATTAGGCCATCTCACACCC
AAAATTGAGTTCGCAAAGCGCTTGCTGGATCGCGATGATCGATTTTCAATAACTGTTCTC
ATAATGAGGCCTGGTCCTGTTCCTGATGCCATTCTAGCACATGTTGAATCACTTGCAGCC
TCCGATACTCGAATAAAATTCATCAATCTGCCCCGTTCTGTTGATCACAATCCTTTGATG
GAGCTTCCCAAGTCCGCGGACAAGTTATTCTCAGATCTTCTGGAAGCCCAGAAGCCTTAT
GTTAAAGAGGCTATTATAAAGCATGCGATTTCTAATCCAAACTCAGCTCCTCTTGCTGGA
TTGGTGGTCGATTTCTTTTGCACATCAATGATCGATGTTGCGAATGAGCTTGGGGTACCT";

?>

