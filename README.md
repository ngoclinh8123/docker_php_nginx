### Requirements

Your device have install `docker` and `docker compose`

### Run project

**Step1**: Prepare env file

- move to root_project folder
- create .env file

```
cd root_project/
touch docker/.env
touch backend/.env
```

## Nội dung file .env hỏi Phùng Ngọc Linh (~.~)

**Step2**: Change localhost hostname

# Ubuntu

```
sudo nano /etc/hosts
```

Then add line `127.0.0.1       base.test`
Then save and close

# Window

- Open Notepad:
  Open Notepad (or Notepad++)
  Right click and choose `Run as administrator`
- Open hosts file:
  `File`>`Open`
  Move to `C:\Windows\System32\drivers\etc`
  Choose file `hosts` (no suffix)
- Add line at end file `127.0.0.1 base.test`
- Save and Exit
- Clear DNS cache:
  Open Terminal and run `ipconfig /flushdns`

**Step3**: Build docker

```
cd docker/
docker compose build
docker compose up
```

Then visit `https://base.test`

### How to see database in Mysql Workbench?

**Create new Mysql Connections**
Connection Name: `gi cung duoc`
Port: `3307`
Username and Password in .env file
Then click Ok
