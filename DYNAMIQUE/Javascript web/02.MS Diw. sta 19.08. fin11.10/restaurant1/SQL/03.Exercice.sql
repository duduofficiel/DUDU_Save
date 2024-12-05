/************************* Exercices d'application Requetes SQL **********************/


/*****************Exercice 1****************/
/*Question 1 - Donner la liste des titres des représentations.*/

SELECT titre FROM représentations;

/*Question 2 - Donner la liste des titres des représentations ayant lieu à l'opéra Bastille.*/


SELECT titre
FROM representations
WHERE lieu = 'Opéra Bastille';



/*****************Exercice 2****************/
/*Question 1 - Quel est le nombre total d'étudiants ?*/

SELECT COUNT(*) AS total_etudiants
FROM etudiants;



/*Question 2 - Quelles sont, parmi l'ensemble des notes, la note la plus haute et la note la plus basse ?*/

SELECT MAX(note) AS note_la_plus_haute, 
       MIN(note) AS note_la_plus_basse
FROM notes;

/*Question 3 - Quelles sont les moyennes de chaque étudiant dans chacune des matières ?*/

SELECT 
    E.Nom, 
    E.Prenom, 
    M.Libellé AS Matiere, 
    AVG(EV.Note) AS Moyenne FROM ETUDIANT E JOIN EVALUER EV ON E.id = EV.id_Etudiant
JOIN MATIERE M ON M.id = EV.id_Matiere
GROUP BY E.Nom, E.Prenom, M.Libellé;


/*Question 4 - Quelles sont les moyennes par matière ?*/

SELECT M.Libellé AS Matiere,AVG(EV.Note) AS Moyenne_Matiere
FROM  EVALUER EV JOIN MATIERE M ON M.id = EV.id_Matiere
GROUP BY M.Libellé;


/*Question 5 - Quelle est la moyenne générale de chaque étudiant ?*/

SELECT 
    E.Nom, 
    E.Prenom, 
    SUM(EV.Note * M.Coeff) / SUM(M.Coeff) AS Moyenne_General FROM EVALUER EV
JOIN ETUDIANT E ON E.id = EV.id_Etudiant
JOIN MATIERE M ON M.id = EV.id_Matiere GROUP BY E.Nom, E.Prenom;

/*Question 6 - Quelle est la moyenne générale de la promotion ?*/

SELECT SUM(EV.Note * M.Coeff) / SUM(M.Coeff) AS Moyenne_Generale_Promotion
FROM EVALUER EV JOIN MATIERE M ON M.id = EV.id_Matiere;


/*Question 7 - Quels sont les étudiants qui ont une moyenne générale supérieure ou égale à la moyenne générale de la promotion ?*/

WITH Moyenne_Promotion AS (SELECT SUM(EV.Note * M.Coeff) / SUM(M.Coeff) AS Moyenne_Generale_Promotion
    FROM EVALUER EV JOIN MATIERE M ON M.id = EV.id_Matiere
)


/*****************Exercice 3****************/
/*Question 1 - Quelle est la composition de l'équipe Festina (Numéro, nom et pays des coureurs) ?*/

SELECT C.id AS Numero, C.NomCoureur AS Nom,  P.NomPays AS Pays
FROM COUREUR C
JOIN EQUIPE E ON C.id_Equipe = E.id 
JOIN PAYS P ON C.id_Pays = P.id
WHERE E.NomEquipe = 'Festina';

/*Question 2 - Quel est le nombre de kilomètres total du Tour de France 97 ?*/

SELECT SUM(NbKm) AS Total_Kilometres FROM ETAPE WHERE DateEtape BETWEEN '1997-07-01' AND '1997-07-31';


/*Question 3 - Quel est le nombre de kilomètres total des étapes de type "Haute Montagne" ?*/

SELECT SUM(E.NbKm) AS Total_Kilometres_Haute_Montagne FROM ETAPE E JOIN TYPE_ETAPE T ON E.id_Type_Etape = T.id
WHERE T.LibelléType = 'Haute Montagne';

/*Question 4 - Quel est le classement général des coureurs (nom, code équipe, code pays et temps des coureurs) ?*/

SELECT  C.NomCoureur AS Nom, E.id AS Code_Equipe, P.id AS Code_Pays, SUM(P.TempsRéalisé) AS Temps_Coureur
FROM COUREUR C JOIN EQUIPE E ON C.id_Equipe = E.id JOIN PAYS P ON C.id_Pays = P.id JOIN PARTICIPER PAR ON C.id = PAR.id_Coureur
GROUP BY C.id, C.NomCoureur, E.id, P.id ORDER BY Temps_Coureur; 