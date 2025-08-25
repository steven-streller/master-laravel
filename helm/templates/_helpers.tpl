{{- define "master-laravel.fullname" -}}
{{- printf "%s" (include "master-laravel.name" .) -}}
{{- end }}

{{- define "master-laravel.name" -}}
{{- default .Chart.Name .Values.nameOverride | trunc 63 | trimSuffix "-" -}}
{{- end }}