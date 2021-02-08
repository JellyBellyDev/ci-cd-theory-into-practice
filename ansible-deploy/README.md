# Ansible for CI⚡CD: the theory put into practice

## Configure
```sh
cd ansible-deploy
cp user-vars.yml.dist user-vars.yml
```

Edit `user-vars.yml` to set your [personal access token](https://gitlab.com/-/profile/personal_access_tokens).

Installare virtualenv per utilizzare ansible sulle macchine di deploy (solo la prima volta)
```bash
pip install virtualenv
python -m virtualenv ansible
source ~/ansible/bin/activate
pip install ansible
```

## Deploy playbook
Rilascia la release indicata sulle macchine dell'inventory selezionato. 

Parametri obbligatori:
- **app_version**: nome della branch o della tag del repo git

Esempio di deploy manuale tramite artefatto (staging)
```sh
ansible-playbook deploy.yml -i inventories/staging -e "app_version=vX.Y.Z"
```

Esempio di deploy della release in produzione
```
ansible-playbook deploy.yml -i inventories/production -e "app_version=vX.Y.Z"
```

Prima dell'esecuzione di ogni comando bisogna settare il virtualenv ansible
```bash
source ~/ansible/bin/activate
```
oppure aggiungete la seguente istruzione a .bashrc
```bash
if [ -f ~/ansible/bin/activate ]; then
    . ~/ansible/bin/activate
fi
```

## Rollback playbook
Effettua il rollback alla versione precedente (utilizzando il link `current_prev`). 
Esempio di rollback:
```sh
ansible-playbook rollback.yml -i inventories/production
```


## Utility
Print vars and hosts of inventory
```sh
ansible-inventory -i inventories/production --list
```
Print vars and hosts of inventory
```sh
ansible-inventory -i inventories/production --graph --vars
```


## Ansible Docs
Ansible deploy helper: https://docs.ansible.com/ansible/latest/collections/community/general/deploy_helper_module.html
Best practices: https://docs.ansible.com/ansible/latest/user_guide/playbooks_best_practices.html
Variable precedence: https://docs.ansible.com/ansible/latest/user_guide/playbooks_variables.html#variable-precedence-where-should-i-put-a-variable
