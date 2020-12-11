#!/usr/bin/env bash
echo "Starting Instana agent"
export INSTANA_ZONE=CodeIgniter
export INSTANA_SERVICE_NAME=CodeIgniter
export INSTANA_AGENT_ENDPOINT=ingress-orange-saas.instana.io
export INSTANA_AGENT_ENDPOINT_PORT=443
export INSTANA_AGENT_KEY=6ETjMarMTE2mpeVrZCKA6w

sudo /opt/instana/agent/bin/start

echo "Starting Apache"
sudo apachectl -D FOREGROUND